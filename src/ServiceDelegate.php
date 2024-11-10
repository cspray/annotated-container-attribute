<?php declare(strict_types=1);

namespace Cspray\AnnotatedContainer\Attribute;

use Attribute;

/**
 * Defines a class method that should be used to instantiate a service instead of having the Container
 * instantiate-and-autowire implicitly.
 *
 * If your factory depends on other services provided by the Container you can depend on them either in the __construct
 * method OR the method that you annotated with #[ServiceDelegate]. Instead of the Container implicitly
 * instantiate-and-autowire your Service it will do so with the defined factory. The functionality provided by the
 * AutowireableInvoker interface will then be utilized to actually invoke the method that creates your service.
 *
 * @api
 */
#[Attribute(Attribute::TARGET_METHOD)]
final class ServiceDelegate implements ServiceDelegateAttribute {

    public function __construct(
        /**
         * @var non-empty-string|null
         */
        public readonly ?string $service = null,
        /**
         * @var list<non-empty-string>
         */
        public readonly array $profiles = [],
    ) {}

    /**
     * @return non-empty-string|null
     */
    public function service() : ?string {
        return $this->service;
    }

    /**
     * @return list<non-empty-string>
     */
    public function profiles() : array {
        return $this->profiles;
    }
}