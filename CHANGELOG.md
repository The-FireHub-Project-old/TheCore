# Release Notes for v0.x.x.pre-alpha

## [Unreleased](https://github.com/The-FireHub-Project/Core/compare/v0.1.7...develop-pre-alpha-m1)

## Added

- Create Init Instance base type ([#89](https://github.com/The-FireHub-Project/Core/issues/89), [817d2b7](https://github.com/The-FireHub-Project/Core/pull/7/commits/817d2b7))
- Create Container class ([#89](https://github.com/The-FireHub-Project/Core/issues/89), [55bb910](https://github.com/The-FireHub-Project/Core/pull/7/commits/55bb910))

## [v0.1.7](https://github.com/The-FireHub-Project/Core/compare/v0.1.6...v0.1.7) - (2024-09-17)

### Added
- Create Char high-level class and tests ([#33](https://github.com/The-FireHub-Project/Core/issues/33), [543c366](https://github.com/The-FireHub-Project/Core/pull/7/commits/543c366))
- Create contracts for high-level classes ([#33](https://github.com/The-FireHub-Project/Core/issues/33), [2198382](https://github.com/The-FireHub-Project/Core/pull/7/commits/2198382))
- Create String high-level support class ([#33](https://github.com/The-FireHub-Project/Core/issues/33), [8eb4fef](https://github.com/The-FireHub-Project/Core/pull/7/commits/8eb4fef))
- Create Number high-level support class ([#33](https://github.com/The-FireHub-Project/Core/issues/33), [3c1c472](https://github.com/The-FireHub-Project/Core/pull/7/commits/3c1c472))
- Create Collection high-level support class ([#33](https://github.com/The-FireHub-Project/Core/issues/33), [ef5ab67](https://github.com/The-FireHub-Project/Core/pull/7/commits/ef5ab67))
- Create Zwick high-level support classes ([#33](https://github.com/The-FireHub-Project/Core/issues/33))
- Create Registry component ([#88](https://github.com/The-FireHub-Project/Core/issues/88), [dea629b](https://github.com/The-FireHub-Project/Core/pull/7/commits/dea629b))

### Changed
- CharMB methods chr and ord have their descriptions changed ([#33](https://github.com/The-FireHub-Project/Core/issues/33), [f3aca75](https://github.com/The-FireHub-Project/Core/pull/7/commits/f3aca75))
- Char high-level class is now final ([#33](https://github.com/The-FireHub-Project/Core/issues/33), [c6ca87b](https://github.com/The-FireHub-Project/Core/pull/7/commits/c6ca87b))

### Fixed
- CharMB methods chr and ord returned Error if the result was 0 ([#33](https://github.com/The-FireHub-Project/Core/issues/33), [d77d018](https://github.com/The-FireHub-Project/Core/pull/7/commits/d77d018))
- Method comparePart in Str low-level proxy class added spaceship operator because linux returns negative or positive number ([#33](https://github.com/The-FireHub-Project/Core/issues/33), [3a12dbd](https://github.com/The-FireHub-Project/Core/pull/7/commits/3a12dbd))

## [v0.1.6](https://github.com/The-FireHub-Project/Core/compare/v0.1.5...v0.1.5) - (2024-02-20)

### Added
- Create Stringable contract ([#23](https://github.com/The-FireHub-Project/Core/issues/23), [50ca73a](https://github.com/The-FireHub-Project/Core/pull/7/commits/50ca73a))
- Add FireHub boot to PHAR, on both web and console boot ([#23](https://github.com/The-FireHub-Project/Core/issues/23), [d3056bb](https://github.com/The-FireHub-Project/Core/pull/7/commits/d3056bb))
- Create base test class ([#23](https://github.com/The-FireHub-Project/Core/issues/23), [4ee33fe](https://github.com/The-FireHub-Project/Core/pull/7/commits/4ee33fe))
- Create NAN and INF number constants ([#23](https://github.com/The-FireHub-Project/Core/issues/23), [9e69fee](https://github.com/The-FireHub-Project/Core/pull/7/commits/9e69fee))
- Create tests for Num low-level proxy classes ([#23](https://github.com/The-FireHub-Project/Core/issues/23), [8206144](https://github.com/The-FireHub-Project/Core/pull/7/commits/8206144))

### Fixed
- Fixed where autoload class was throwing error if callable is used from another autoloader ([#23](https://github.com/The-FireHub-Project/Core/issues/23), [e04b488](https://github.com/The-FireHub-Project/Core/pull/7/commits/e04b488))
- IterablesAggregate now extends internal Traversable class ([#23](https://github.com/The-FireHub-Project/Core/issues/23), [76f0f3c](https://github.com/The-FireHub-Project/Core/pull/7/commits/76f0f3c))
- Data low-level proxy class, method setType now throws error if trying to convert an array to string or object to some types ([#23](https://github.com/The-FireHub-Project/Core/issues/23), [0305486](https://github.com/The-FireHub-Project/Core/pull/7/commits/0305486))
- core method of Pat high-level class now uses __DIR__ instead of a Phar path ([#23](https://github.com/The-FireHub-Project/Core/issues/23), [8977894](https://github.com/The-FireHub-Project/Core/pull/7/commits/8977894))
- toTimestamp and formatInteger bugfix ([#23](https://github.com/The-FireHub-Project/Core/issues/23), [dd82703](https://github.com/The-FireHub-Project/Core/pull/7/commits/dd82703))
- Move some methods to Num from NumFloat low-level proxy class ([#23](https://github.com/The-FireHub-Project/Core/issues/23), [dd82703](https://github.com/The-FireHub-Project/Core/pull/7/commits/dd82703))
- Refactor RegexMB::encoding method ([#23](https://github.com/The-FireHub-Project/Core/issues/23), [b7cb32e](https://github.com/The-FireHub-Project/Core/pull/7/commits/b7cb32e))
- Methods compare and compareFirstN in Str low-level proxy class added spaceship operator because linux returns negative or positive number ([#23](https://github.com/The-FireHub-Project/Core/issues/23), [da4d1df](https://github.com/The-FireHub-Project/Core/pull/7/commits/da4d1df))

### Changed
- Method setType on Data low-level proxy no longer supports converting array ti string ([#23](https://github.com/The-FireHub-Project/Core/issues/23), [2002fab](https://github.com/The-FireHub-Project/Core/pull/7/commits/2002fab))

## [v0.1.5](https://github.com/The-FireHub-Project/Core/compare/v0.1.4...v0.1.5) - (2024-02-01)

### Added
- Create PHP helper ([#20](https://github.com/The-FireHub-Project/Core/issues/20), [87d8f9c](https://github.com/The-FireHub-Project/Core/pull/7/commits/87d8f9c))
- Create Path high-level class ([#20](https://github.com/The-FireHub-Project/Core/issues/20), [051998c](https://github.com/The-FireHub-Project/Core/pull/7/commits/051998c))
- Create Autoload classes ([#20](https://github.com/The-FireHub-Project/Core/issues/20), [952c601](https://github.com/The-FireHub-Project/Core/pull/7/commits/952c601))

## [v0.1.4](https://github.com/The-FireHub-Project/Core/compare/v0.1.3...v0.1.4) - (2024-01-23)

### Added
- Create Kernel ([#19](https://github.com/The-FireHub-Project/Core/issues/19), [3df664e](https://github.com/The-FireHub-Project/Core/pull/7/commits/3df664e))

## [v0.1.3](https://github.com/The-FireHub-Project/Core/compare/v0.1.2...v0.1.3) - (2024-01-23)

### Added
- Create Countable contract ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [2a4234a](https://github.com/The-FireHub-Project/Core/pull/7/commits/2a4234a))
- Create iterator contracts ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [62b261a](https://github.com/The-FireHub-Project/Core/pull/7/commits/62b261a))
- Create CaseFolding enum ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [d9e8aa0](https://github.com/The-FireHub-Project/Core/pull/7/commits/d9e8aa0))
- Create Order enum ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [d4966c4](https://github.com/The-FireHub-Project/Core/pull/7/commits/d4966c4))
- Create Sort enum ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [4063d8c](https://github.com/The-FireHub-Project/Core/pull/7/commits/4063d8c))
- Create Arr low-level proxy class ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [f1c8868](https://github.com/The-FireHub-Project/Core/pull/7/commits/f1c8868))
- Create DataIs low-level proxy class ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [f8b2f4f](https://github.com/The-FireHub-Project/Core/pull/7/commits/f8b2f4f))
- Create Iterator low-level proxy class ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [ec5b35b](https://github.com/The-FireHub-Project/Core/pull/7/commits/ec5b35b))
- Create Iterables low-level proxy class ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [f1b3cb5](https://github.com/The-FireHub-Project/Core/pull/7/commits/f1b3cb5))
- Create string encoding enum ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [946a3c6](https://github.com/The-FireHub-Project/Core/pull/7/commits/946a3c6))
- Create char low-level proxy classes ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [06fcae1](https://github.com/The-FireHub-Project/Core/pull/7/commits/06fcae1))
- Create Create Side enum ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [c62a4ee](https://github.com/The-FireHub-Project/Core/pull/7/commits/c62a4ee))
- Create Number constants ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [ac37a80](https://github.com/The-FireHub-Project/Core/pull/7/commits/ac37a80))
- Create string low-level classes ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [5626109](https://github.com/The-FireHub-Project/Core/pull/7/commits/5626109))
- Create Regex low-level classes ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [18ac58f](https://github.com/The-FireHub-Project/Core/pull/7/commits/18ac58f))
- Create number enums ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [025ebff](https://github.com/The-FireHub-Project/Core/pull/7/commits/025ebff))
- Create number low-level proxy classes ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [f3f5a9b](https://github.com/The-FireHub-Project/Core/pull/7/commits/f3f5a9b))
- Create class and object low-level proxy classes ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [5cc528c](https://github.com/The-FireHub-Project/Core/pull/7/commits/5cc528c))
- Create Constant low-level proxy class ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [3744571](https://github.com/The-FireHub-Project/Core/pull/7/commits/3744571))
- Created data enums ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [9dd59c6](https://github.com/The-FireHub-Project/Core/pull/7/commits/9dd59c6))
- Created Data low-level proxy class ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [e545e6e](https://github.com/The-FireHub-Project/Core/pull/7/commits/e545e6e))
- Created Func and Declared low-level classes ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [a31f6e0](https://github.com/The-FireHub-Project/Core/pull/7/commits/a31f6e0))
- Create DateTime low-level proxy classes ([#10](https://github.com/The-FireHub-Project/Core/issues/10), [c5bf880](https://github.com/The-FireHub-Project/Core/pull/7/commits/c5bf880))
- Create Path constants ([#10](c5bf880](https://github.com/The-FireHub-Project/Core/pull/7/commits/c5bf880))
- Create FileSystem low-level proxy classes ([#10](3b8b7ce](https://github.com/The-FireHub-Project/Core/pull/7/commits/3b8b7ce))

## [v0.1.2](https://github.com/The-FireHub-Project/Core/compare/v0.1.1...v0.1.2) - (2023-11-28)

### Added
- Created UML diagram theme ([#9](https://github.com/The-FireHub-Project/Core/issues/9), [5740a0d](https://github.com/The-FireHub-Project/Core/pull/7/commits/5740a0d))

## [v0.1.1](https://github.com/The-FireHub-Project/Core/compare/v0.1.0...v0.1.1) - (2023-11-28)

### Added
- Created landing init files for phar archive ([#8](https://github.com/The-FireHub-Project/Core/issues/8), [53b8d81](https://github.com/The-FireHub-Project/Core/pull/7/commits/53b8d81))
- Created PHAR archive with token ([#8](https://github.com/The-FireHub-Project/Core/issues/8), [67f102b](https://github.com/The-FireHub-Project/Core/pull/7/commits/67f102b))

## v0.1.0 - (2023-11-28)

Initial release.