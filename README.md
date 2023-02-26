# Annotated Container Attribute

Attributes used in [cspray/annotated-container](https://github.com/cspray/annotated-container) to configure an autowired, 
PSR-11 dependency injection Container. These Attributes are split into a separate repo to allow 3rd party libraries to 
configure their own services without having to include all of Annotated Container. This allows those libraries to easily
integrate with Annotated Container without having to tie the app using their library to a specific dependency injection 
container.

## Installation

```
composer require cspray/annotated-container-attribute
```
