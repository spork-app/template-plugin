Spork.setupStore({
    __CAPITAL_FEATURE_NAME__: require("./store").default,
})


Spork.routesFor('__FEATURE_NAME__', [
  // Spork.authenticatedRoute('/__FEATURE_NAME__', require('./__FEATURE_NAME__/__FEATURE_NAME__').default,
  // Spork.unauthenticatedRoute('/__FEATURE_NAME__', require('./__FEATURE_NAME__/__FEATURE_NAME__').default,
]);
