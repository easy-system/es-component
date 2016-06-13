Conventions
===========

1. All components of the system must have a `Сomponent` class.
2. The `Component` class must be located in the root of component namespace.
3. The required methods of `Component` class are:
   * `getVersion()` - Gets the version of component in the format `X.Y.Z`
4. The optional methods of `Component` class are:
   * `getServicesConfig`  - returns an array of services configuration
   * `getListenersConfig` - returns an array of listeners configuration
   * `getEventsConfig`    - returns an array of events configuration
   * `getSystemConfig`    - returns an array of system configuration