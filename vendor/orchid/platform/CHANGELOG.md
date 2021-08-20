# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](http://keepachangelog.com/en/1.0.0/)
and this project adheres to [Semantic Versioning](http://semver.org/spec/v2.0.0.html).

## 10.12.2 - 2021-08-17

### Fixed

- Invalid padding for command-bar buttons in mobile view [#1603](https://github.com/orchidsoftware/platform/issues/1603)

## 10.12.1 - 2021-08-17

### Changed

- Improved text contrast

### Fixed

- Select2 input focus [#1826](https://github.com/orchidsoftware/platform/issues/1826)
- Modal sizes [#1829](https://github.com/orchidsoftware/platform/issues/1829)

## 10.12.0 - 2021-08-06

### Added

- Short align methods for TD

### Changed

- Screen template for shortening
- Updated dependencies

### Fixed

- Tab toggle with leaflet map [#1817](https://github.com/orchidsoftware/platform/pull/1817)

## 10.11.0 - 2021-07-25

### Changed

- Combine "parameters" and "method" methods [#1808](https://github.com/orchidsoftware/platform/issues/1808)

## 10.10.0 - 2021-07-17

### Added

- Catalan translation [#1802](https://github.com/orchidsoftware/platform/pull/1802)

### Changed

- Arguments in method permission Menu [#1803](https://github.com/orchidsoftware/platform/pull/1803)

## 10.9.0 - 2021-07-06

### Changed

- Revert #1786

## 10.8.2 - 2021-07-06

### Changed

- Added confirmed "Love" for install

## 10.8.1 - 2021-07-05

### Changed

- Updated dependencies

### Fixed

- Added forced event on change for `Quill` field

## 10.8.0 - 2021-07-02

### Added

- Indonesian translation [#1794](https://github.com/orchidsoftware/platform/pull/1794)
- New events for uploading files [#1782](https://github.com/orchidsoftware/platform/pull/1782)
- Implementation cursor pagination [#1775](https://github.com/orchidsoftware/platform/pull/1775)

### Fixed

- Menu state while using `Octane` [#1786](https://github.com/orchidsoftware/platform/pull/1786)
- Edit/delete for `Upload` field [#1795](https://github.com/orchidsoftware/platform/issues/1795)
- Dropdown filter hiding when clicking on select2 search-field [#1767](https://github.com/orchidsoftware/platform/issues/1767)

## 10.7.1 - 2021-06-28

### Fixed
- Read notifications interval from config [#1785](https://github.com/orchidsoftware/platform/pull/1785)
- Double name problem for Upload field

## 10.7.0 - 2021-06-24

### Added

- Usage `Conditionable` trait for Field

### Changed

- Minimal Laravel version
- Removed sorting permission by default

### Fixed

- `e.target.xhr` is undefined for submit [#1781](https://github.com/orchidsoftware/platform/issues/1781)

## 10.6.3 - 2021-06-23

### Fixed

- Unable to switch back to original user when using impersonate feature with non-default
  guard [#1768](https://github.com/orchidsoftware/platform/issues/1768)

## 10.6.2 - 2021-06-23

### Fixed

- Sort windows modal [#1772](https://github.com/orchidsoftware/platform/issues/1772)

## 10.6.1 - 2021-06-23

### Fixed

- Fixed remove roles for user [#1770](https://github.com/orchidsoftware/platform/issues/1770)

## 10.6.0 - 2021-06-21

### Added

- `maximumSelectionLength` for `Select` field. [#1774](https://github.com/orchidsoftware/platform/pull/1774)

### Fixed

- Update problem for CSRF token [#1771](https://github.com/orchidsoftware/platform/issues/1771)

## 10.5.2 - 2021-06-07

### Fixed

- Delete file for `Upload` field

## 10.5.1 - 2021-06-04

### Added

- Added overflow-hidden for dummy block

### Changed

- Updated dependency packages

### Fixed

- Error when sending a field without a mask

## 10.5.0 - 2021-05-26

### Added

- Config for fallback routes setting [#1745](https://github.com/orchidsoftware/platform/pull/1745)

## 10.4.2 - 2021-05-21

### Fixed

- Added padding for date-filter
- Display divider for empty profile menu

## 10.4.1 - 2021-05-21

### Fixed
- Media Catalog - Selected attachment ID [#1667](https://github.com/orchidsoftware/platform/issues/1667)
- Dark hover for profile

## 10.4.0 - 2021-05-20

### Changed
- Update to Bootstrap v5.0.1 [#1720](https://github.com/orchidsoftware/platform/issues/1720)

## 10.3.0 - 2021-05-07

### Added
- Browsing layout [#1716](https://github.com/orchidsoftware/platform/pull/1716)
- Implemented additional flatpickr.js methods for DateTimer field. [#1711](https://github.com/orchidsoftware/platform/pull/1711)

### Changed
- Update PHP-CS-Fixer [#1721](https://github.com/orchidsoftware/platform/pull/1721)

### Fixed
- Modals `backdrop` for `Cropper/Picture` fields

## 10.2.1 - 2021-04-30

### Changed
- Allow laravel/scout 9.x [#1712](https://github.com/orchidsoftware/platform/pull/1712)
- Animation for modals
- Demo screens appearance

### Fixed
- Show modal for Upload and change animation [#1715](https://github.com/orchidsoftware/platform/issues/1715)
- Query string for filter clear button [#1704](https://github.com/orchidsoftware/platform/pull/1704)

## 10.2.0 - 2021-04-24

### Added
- Autofocus for open dropdown [#1475](https://github.com/orchidsoftware/platform/issues/1475)
- Method`serverFormat` for `DateTimer` field
- Auto division group for `Upload` field

### Changed
- Allowed to send escape characters in the `SimpleMDE` field

## 10.1.4 - 2021-04-23

### Fixed
- Add bottom padding for best view [#1688](https://github.com/orchidsoftware/platform/pull/1688)
- Remove init bootstrap

## 10.1.3 - 2021-04-23

### Fixed
- Old name from request [#1675](https://github.com/orchidsoftware/platform/pull/1675)
- Pagination responsibility [#1681](https://github.com/orchidsoftware/platform/pull/1681)
- Send filter multiple array [#1682](https://github.com/orchidsoftware/platform/pull/1682)
- Color with table-striped [#1680](https://github.com/orchidsoftware/platform/issues/1680)
- Menu sorting and active sub element

## 10.1.2 - 2021-04-19

### Fixed
- Show `Select` field from modals

## 10.1.1 - 2021-04-19

### Fixed
- Button `formmethod` attribute typo

## 10.1.0 - 2021-04-19

### Added
- Missing attributes for Button class
- Macroable trait to field class [#1678](https://github.com/orchidsoftware/platform/pull/1678)

### Fixed
-  Change old class selectors for Cropper/Picture

## 10.0.2 - 2021-04-17

### Fixed
- Make submenu id equal to the slug [#1673](https://github.com/orchidsoftware/platform/pull/1673)
- Remove namespace for `Date` field [#1672](https://github.com/orchidsoftware/platform/pull/1672)

## 10.0.1 - 2021-04-15

### Fixed
- Sorting of elements menu [#1668](https://github.com/orchidsoftware/platform/pull/1668)

## 10.0.0 - 2021-04-14

### Added
- Multiguard support [#1633](https://github.com/orchidsoftware/platform/pull/1633), [#1614](https://github.com/orchidsoftware/platform/pull/1614)
- `Legend` layout and `Sight` class for simple view to display data [#1607](https://github.com/orchidsoftware/platform/issues/1607)
- Turbo [#1473](https://github.com/orchidsoftware/platform/issues/1473)

### Changed
- Use a menu item as part of an `Action` [#1637](https://github.com/orchidsoftware/platform/issues/1637)
- Using `canSee` and `isSee` [#1559](https://github.com/orchidsoftware/platform/issues/1559)
- Updated `Bootstrap` version to v5.0.0-beta3 [#1152](https://github.com/orchidsoftware/platform/issues/1152)
- Updated `Stimulus` version to 2.0 [#1389](https://github.com/orchidsoftware/platform/issues/1389)

### Removed
- The `Turbolinks` has been replaced in favor of a `Turbo`
- The `Compendium` class has been removed. Recommend using a newer Legend.
- The `Collapse` class has been removed.

## 9.21.0 - 2021-04-10

### Added
- Translated missing text in Italian [#1653](https://github.com/orchidsoftware/platform/pull/1653)
- Method `showMinDaysOfWeek` for `TimeCollection`

## 9.20.1 - 2021-03-25

### Fixed
- Send filter multiple array

## 9.20.0 - 2021-03-21

### Added
- Dutch translation [#1612](https://github.com/orchidsoftware/platform/pull/1612)

### Fixed
- Changed id prefix for Matrix [#1629](https://github.com/orchidsoftware/platform/pull/1629)
- Type mismatch [#1577](https://github.com/orchidsoftware/platform/pull/1577)

## 9.19.8 - 2021-02-19

### Fixed
- `orchid:admin` command doesn't accept values

## 9.19.7 - 2021-02-10

### Changed
- Update dependencies

## 9.19.6 - 2021-02-08

### Fixed
- `AsSource::getContent()` does not return virtual fields defined as Model Accessor [#1558](https://github.com/orchidsoftware/platform/issues/1558)

## 9.19.5 - 2021-02-06

### Fixed
- Display of background notifications
- Removed the default background value for `badge` [#1076](https://github.com/orchidsoftware/platform/issues/1076)

## 9.19.4 - 2021-01-26

### Fixed
- Open link for Safari [#1539](https://github.com/orchidsoftware/platform/issues/1539)

## 9.19.3 - 2021-01-26

### Added
- Added a log of changes to the menu

### Changed
- Reduced left menu width
- Allow exit on Impersonation

### Fixed
- Field name for code

## 9.19.2 - 2021-01-26

### Fixed
- Map related User model [#1544](https://github.com/orchidsoftware/platform/pull/1544)

## 9.19.1 - 2021-01-26

### Fixed
- UserEditScreen stub more reasonable for CREATE [#1541](https://github.com/orchidsoftware/platform/pull/1541)

## 9.19.0 - 2021-01-23

### Added
- Create new user via `Systems -> Users` screen [#1534](https://github.com/orchidsoftware/platform/pull/1534)

### Changed
- Use a dash instead of blank percentages with an icon.

### Fixed
- Hide file download link for non-public storage [#1533](https://github.com/orchidsoftware/platform/pull/1533)
- Wiping user roles when updating user via oneAsyncModal [#1535](https://github.com/orchidsoftware/platform/pull/1535)

## 9.18.1 - 2021-01-20

### Changed
- Updated dependencies
- Increased the size of the icons in the menu

## 9.18.0 - 2021-01-18

### Added
- Support annotations for Charts [#1526](https://github.com/orchidsoftware/platform/pull/1526)
- Simplified Chinese translation [#1516](https://github.com/orchidsoftware/platform/pull/1516)

## 9.17.1 - 2021-01-15

### Fixed
- Table error when pagination is missing
- Used current methods instead ustaresh

## 9.17.0 - 2021-01-15

### Added
- Method for display the day of the week in charts
- Method for using the component in TD [#1489](https://github.com/orchidsoftware/platform/issues/1489)

## 9.16.1 - 2021-01-11

### Added
- Missing Spanish translation [#1495](https://github.com/orchidsoftware/platform/pull/1495)
- Corrected/Optimized German translation [#1496](https://github.com/orchidsoftware/platform/pull/1496)

### Fixed
- Clarification that could confuse new users [#86](https://github.com/orchidsoftware/orchid.software/issues/86)

## 9.16.0 - 2021-01-10

### Added
- Support method `onEachSide` for Table

## 9.15.2 - 2021-01-10

### Fixed
- Display pagination on mobile device
- Wrong method to process password update form. [#1491](https://github.com/orchidsoftware/platform/pull/1491)
- Added missing keys in Russian translation for profile page [#1492](https://github.com/orchidsoftware/platform/pull/1492)

## 9.15.1 - 2021-01-08

### Fixed
- Hoverable template

## 9.15.0 - 2021-01-07

### Added
- Hover rows for table

### Changed
- Automatic translation of chart titles

## 9.14.6 - 2021-01-06

### Fixed
- "An invalid form control with name='' is not focusable." For hidden datepicker

## 9.14.5 - 2021-01-05

### Changed
- Show two-digit numbers of unread notifications
- Do not use the plural "Systems"
- Update dependencies

### Fixed
- Ability to specify the width in percent for columns
- Usage of notification refresh period
- Datepicker issue on filter dropdown [#1486](https://github.com/orchidsoftware/platform/pull/1486) [#1386](https://github.com/orchidsoftware/platform/issues/1386)

### Removed
- Unused translations

### Deprecated
- `childs()` for `ItemMenu` usage `withChildren()`

## 9.14.4 - 2020-12-29

### Changed
- Pages are closed from indexing by default

### Fixed
- Submit confirm button for Safari [#1482](https://github.com/orchidsoftware/platform/issues/1482)


## 9.14.3 - 2020-12-26

### Changed
- Using app name in headers [#1476](https://github.com/orchidsoftware/platform/issues/1476)

## 9.14.2 - 2020-12-23

### Fixed
- Display only hidden filter

## 9.14.1 - 2020-12-23

### Fixed
- Display only hidden filter

## 9.14.0 - 2020-12-18

### Added
- Parameters to the config file to configure notifications
- `php-cs-fixer` for GitHub Action

### Changed
- Use seconds instead of microseconds to set the refresh interval for notifications
- Use one method name to instantiate for code consistency
- Default background-color

### Deprecated
- Method `set` for TD. (Usage `make`)

### Removed
- Decorative elements from headers
- Some controllers removed the use of jQuery

## 9.13.0 - 2020-12-13

### Added
- Support PHP 8.0 [#1396](https://github.com/orchidsoftware/platform/pull/1396)
- Persian Farsi translation. [#1394](https://github.com/orchidsoftware/platform/pull/1394)

## 9.12.1 - 2020-12-06

### Fixed
- Filters style [#1387](https://github.com/orchidsoftware/platform/pull/1387)

## 9.12.0 - 2020-12-05

### Added
- Methods `sumByDays` and `valuesByDays` for `Chartable` trait

## 9.11.2 - 2020-12-04

### Fixed
- Display of the active radio button [#1385](https://github.com/orchidsoftware/platform/pull/1385)

## 9.11.1 - 2020-11-30

### Fixed
- Padding when using a block/card

## 9.11.0 - 2020-11-29

### Added
- Block layout [#1380](https://github.com/orchidsoftware/platform/pull/1380)
- Search columns for Relation field [#1377](https://github.com/orchidsoftware/platform/pull/1377)

## 9.10.1 - 2020-11-26

### Fixed
- Email profile validation
- Typo in the first character of the cancel button in confirm view, Russian character instead of English. Added missed key in Russian translation [#1375](https://github.com/orchidsoftware/platform/pull/1375)

## 9.10.0 - 2020-11-24

### Changed
- Changed the visual appearance of the confirmation window

## 9.9.2 - 2020-11-20

### Fixed
- The appearance of the horizontal filter

## 9.9.1 - 2020-11-18

### Fixed
- Removed artificial limitation of filter width

## 9.9.0 - 2020-11-13

### Added
- Method to clear the permission check cache [#1354](https://github.com/orchidsoftware/platform/pull/1354)
- Added third status for checkbox [#1360](https://github.com/orchidsoftware/platform/pull/1360)
- Added use of the third status to display available permissions [#1360](https://github.com/orchidsoftware/platform/pull/1360)
- Added `datalist` for Input field [#1362](https://github.com/orchidsoftware/platform/pull/1362)

### Changed
- Update Faker [#1353](https://github.com/orchidsoftware/platform/pull/1353)

### Fixed
- Added missing keys translation [#1355](https://github.com/orchidsoftware/platform/pull/1355), [#1356](https://github.com/orchidsoftware/platform/pull/1356), [#1358](https://github.com/orchidsoftware/platform/pull/1358), 
- Frozen version of Frappe charts

## 9.8.2 - 2020-11-10

### Fixed
- Generate TD CSS width value [#1348](https://github.com/orchidsoftware/platform/pull/1348)
- Dropzone.js timeout option not set. [#1349](https://github.com/orchidsoftware/platform/issues/1349), [#1350](https://github.com/orchidsoftware/platform/pull/1350)

## 9.8.1 - 2020-11-09

### Fixed
- Rendering of attribute style in td view [#1347](https://github.com/orchidsoftware/platform/pull/1347)
- Added maximum width and height for image fields

## 9.8.0 - 2020-11-07

### Added
- Added `popover` method for TD [#1339](https://github.com/orchidsoftware/platform/issues/1339)

### Changed
- Rename breadcrumbs `Main` to `Home`

## 9.7.4 - 2020-11-04

### Fixed
- Corrected translation

## 9.7.3 - 2020-11-03

### Fixed
- Corrected translation of 404 page

## 9.7.2 - 2020-11-03

### Fixed
- Duplicate title for permissions
- Do not call the icon component with an empty parameter [#1331](https://github.com/orchidsoftware/platform/issues/1331)

## 9.7.1 - 2020-11-02

### Fixed
- Display of modal windows after unsuccessful validation

## 9.7.0 - 2020-10-24

### Added
- Automatically translate button names

## 9.6.0 - 2020-10-24

### Added
- Bootstrap table-bordered to the table layout

## 9.5.4 - 2020-10-23

### Fixed
- Render `DateRange` field with a value

## 9.5.3 - 2020-10-22

### Fixed
- Striped style for tables

## 9.5.2 - 2020-10-22

### Fixed
- Empty scope in Relation field

## 9.5.1 - 2020-10-21

### Fixed
- Displaying html value in Quill field

## 9.5.0 - 2020-10-21

### Added
- Relation scope parameters [#1085](https://github.com/orchidsoftware/platform/pull/1085)
- Option for creating admin command. Changing only the permissions column [#1319](https://github.com/orchidsoftware/platform/pull/1319)

### Changed
- Automatic array wrapping when using modal

### Fixed
- Scaling on iOS
- Btn class not working on Link [#1291](https://github.com/orchidsoftware/platform/pull/1291) [#1276](https://github.com/orchidsoftware/platform/issues/1276)
- Passing null to postgresql database during validation
- Do not escaped the value of a geographic map [#1318](https://github.com/orchidsoftware/platform/issues/1318)
- Escaped textarea value
- Improved login page padding on mobile devices
- Display of indents for the icon if there is no text
- Show active element menu with get parameters

## 9.4.4 - 2020-10-19

### Fixed
- Escape inline attributes [#1313](https://github.com/orchidsoftware/platform/pull/1313)

## 9.4.3 - 2020-10-17

### Changed
- Updated dependencies

### Fixed
- Fixed filters overlay for table [#1145](https://github.com/orchidsoftware/platform/issues/1145)
- Fixed `ob_*` behavior when using the Blade in PHPUnit tests
- Removed optional tags
- Removed dash when a description is empty
- Display of pagination for long horizontal tables.

## 9.4.2 - 2020-10-13

### Fixed
- Allow passing `null` in Menu permission

## 9.4.1 - 2020-10-11

### Fixed
- Quotes break the Quill editor [#1292](https://github.com/orchidsoftware/platform/issues/1292)
- Corrected Users listing heading label. [#1289](https://github.com/orchidsoftware/platform/pull/1289), [#1273](https://github.com/orchidsoftware/platform/issues/1273)

## 9.4.0 - 2020-10-08

### Added
- Aligns methods for `Group` field
- Clear method for `Field`

### Changed
- Betterment UI #1227

### Fixed
- Not display filters for simple pagination
- Show empty total row
- Not load files translation

### Deprecated
- Methods right/block  for Action

## 9.3.0 - 2020-10-07

### Added
- Method to automatically open a modal window on page load
- Method for disable backdrop modals

### Changed
- Revert change 9.2.0

## 9.2.0 - 2020-10-07

### Added
- Method to automatically open a modal window on page load

## 9.1.1 - 2020-10-06

### Changed
- Removed white wrapper for tabs elements

## 9.1.0 - 2020-10-05

### Added
- Short `selection` layout

### Fixed
- When generating links to resources, the settings `app.mix_url` and` app.asset_url` must be obeyed [#1267](https://github.com/orchidsoftware/platform/issues/1267)
- Change the default port for the Dusk test

## 9.0.3 - 2020-10-02

### Fixed
- Registration of services

## 9.0.2 - 2020-10-02

### Fixed
- Use route arguments when generating an active link
- Wait for a call to the breadcrumbs service before your ad.

## 9.0.1 - 2020-10-01

### Changed
- Redirects when the login form is disabled [#1264](https://github.com/orchidsoftware/platform/pull/1264)

## 9.0.0 - 2020-09-30

### Changed
- Set  default prefix to `admin` [#1230](https://github.com/orchidsoftware/platform/issues/1230)
- Betterment UI [#1227](https://github.com/orchidsoftware/platform/issues/1227)
- Using the breadcrumbs component

### Fixed
- Show activity of nested menu items [#1249](https://github.com/orchidsoftware/platform/issues/1249)

### Removed
- Dependency on `laravel/ui` [#1230](https://github.com/orchidsoftware/platform/issues/1230)
- Dependency on `ralouphie/mimey`
- Password recovery option [#1230](https://github.com/orchidsoftware/platform/issues/1230)
- Last login column [#1230](https://github.com/orchidsoftware/platform/issues/1230)
- Two-factor authentication [#1230](https://github.com/orchidsoftware/platform/issues/1230)
- UI presets [#1230](https://github.com/orchidsoftware/platform/issues/1230)
- Rubbers layout



## 8.5.1 - 2020-09-30

### Fixed
- Compare operator for hasAttribute [#1258](https://github.com/orchidsoftware/platform/pull/1258)

## 8.5.0 - 2020-09-29

### Added
- Taggable option for select [#1256](https://github.com/orchidsoftware/platform/pull/1256)

## 8.4.0 - 2020-09-29

### Added
- Custom controls to Quill toolbar [#1254](https://github.com/orchidsoftware/platform/pull/1254)

## 8.3.1 - 2020-09-26

### Fixed
- Removed preview display when upload error for `Upload` field
- Show buttons delete and edit for preview

### Deprecated
- Rubbers layout

## 8.3.0 - 2020-09-21

### Changed
- Allow data attributes [1245](https://github.com/orchidsoftware/platform/pull/1245)

### Fixed
- Disabled export property for `Chart`

## 8.2.2 - 2020-09-20

### Fixed
- All values converted to 0 in toChart() method. [#1210](https://github.com/orchidsoftware/platform/issues/1210)

## 8.2.1 - 2020-09-19

### Fixed
- Column name is optional
- Fixed doc blocks

## 8.2.0 - 2020-09-19

### Added
- Static backdrop method to `Cropper` field [#1239](https://github.com/orchidsoftware/platform/pull/1239)
- Command to create a presenter [#1234](https://github.com/orchidsoftware/platform/pull/1234)

### Fixed
- Definition of icon configuration
- Assets compilation [#1235](https://github.com/orchidsoftware/platform/pull/1235)

## 8.1.0 - 2020-09-14

### Changed
- Return `back()` for `Screen` to default [#1221](https://github.com/orchidsoftware/platform/issues/1221)

### Fixed
- Role selection field and added an example of displaying a value [#1226](https://github.com/orchidsoftware/platform/pull/1226)

## 8.0.2 - 2020-09-14

### Fixed
- Use strict type casting in `Select` field

## 8.0.1 - 2020-09-12

### Changed
- Upgrade `laravel/ui` package from `^2.0` to `^3.0`

## 8.0.0 - 2020-09-10

### Added
- French translation [#1208](https://github.com/orchidsoftware/platform/pull/1208)

### Changed
- The screen only responds to POST and GET requests. [#1092](https://github.com/orchidsoftware/platform/pull/1092)
- Replaced a package of davejamesmiller/laravel-breadcrumbs with tabuna/breadcrumbs. [#1073](https://github.com/orchidsoftware/platform/issue/1073)
- Using SVG icons [#1061](https://github.com/orchidsoftware/platform/issues/1061)
- Route for *acync* screen methods [#1116](https://github.com/orchidsoftware/platform/issues/1116)

### Fixed
- Improper behavior when implementing dependency [#1150](https://github.com/orchidsoftware/platform/issues/1150)
- If the field is a multi-select an array of values is sent to the async method [#1209](https://github.com/orchidsoftware/platform/pull/1209)

### Remove
- Pending Requests in the screen constructor. [#1092](https://github.com/orchidsoftware/platform/pull/1092)
- TinyMCE field. [#873](https://github.com/orchidsoftware/platform/issues/873)
- Settings. [#1087](https://github.com/orchidsoftware/platform/issues/1087)
- Release Messages [#1217](https://github.com/orchidsoftware/platform/pull/1217)

## 7.18.0 - 2020-08-19

### Added
- Added a row with totals to the table [#1205](https://github.com/orchidsoftware/platform/issues/1205)

## 7.17.4 - 2020-08-15

### Changed
- Updated lodash packages to 4.17.20
- Updated flatpickr packages to 4.6.6

### Fixed
- Fixed duplicate values in Upload field

## 7.17.3 - 2020-08-12

### Fixed
- Fixed position class ".table-striped" [#1204](https://github.com/orchidsoftware/platform/pull/1204)

## 7.17.2 - 2020-08-11

### Fixed
- Fixed index calculation instead of quantity [#1201](https://github.com/orchidsoftware/platform/issues/1201)

## 7.17.1 - 2020-08-07

### Changed
- Updated phpDoc block in Button class [#1200](https://github.com/orchidsoftware/platform/pull/1200)
- Updated bootstrap packages to 4.5.2 
- Updated inputmask packages to 5.0.5

## 7.17.0 - 2020-08-05

### Changed
- Simplified registration of the menu [#1157](https://github.com/orchidsoftware/platform/pull/1157)
- Replaced the outdated group definition with the actual
- Updated NPM packages

### Removed
- Removed unused constructor code [#1199](https://github.com/orchidsoftware/platform/pull/1199)
- Removed height declaration from default charts

### Fixed
- Fixed bugs found by the static analyzer [#1196](https://github.com/orchidsoftware/platform/pull/1196)

## 7.16.0 - 2020-08-03

### Added
- Method `action` for setting the address of the form action

## 7.15.0 - 2020-07-30

### Added
- Added `Chartable` trait [#1179](https://github.com/orchidsoftware/platform/issues/1179)

### Deprecated
- Property `labels` in `Chart` [#1179](https://github.com/orchidsoftware/platform/issues/1179)

## 7.14.1 - 2020-07-27

### Fixed
- Search Page: label is overlays help text [#1185](https://github.com/orchidsoftware/platform/issues/1185)

## 7.14.0 - 2020-07-17

### Added
- Attribute `group` for picture field [#118](https://github.com/orchidsoftware/platform/pull/1180)

### Fixed
- Inputs that in group don't serialize in filter [#1181](https://github.com/orchidsoftware/platform/issues/1181)

## 7.13.0 - 2020-07-11

### Added
- Configuration option to switch on/off reset password functionality [#1177](https://github.com/orchidsoftware/platform/pull/1177)

### Changed
- Override `sendResetLinkEmail` method to return success message in all cases [#1176](https://github.com/orchidsoftware/platform/pull/1176)

## 7.12.1 - 2020-07-07

### Fixed
- Adding the toke to reset password form [#1173](https://github.com/orchidsoftware/platform/pull/1173)

## 7.12.0 - 2020-07-02

### Added
- Added the ability to specify the colors of characters and background  [#1172](https://github.com/orchidsoftware/platform/pull/1172)

## 7.11.3 - 2020-06-29

### Fixed
- Adding a name to the reset password route of auth group [#1169](https://github.com/orchidsoftware/platform/pull/1169)

## 7.11.2 - 2020-06-26

### Fixed
- PHPDoc return type for `Fieldable::get()` [#1156](https://github.com/orchidsoftware/platform/pull/1156)
- Delete row for Matrix field does not work in Firefox [#1166](https://github.com/orchidsoftware/platform/issues/1166)

## 7.11.1 - 2020-06-21

### Fixed
- Listener updates after execution.
- Select2 cache destroy [#1155](https://github.com/orchidsoftware/platform/pull/1155)

## 7.11.0 - 2020-06-16

### Added
- Method `->fields()` for `Matrix` [#1147](https://github.com/orchidsoftware/platform/pull/1147)


## 7.10.3 - 2020-06-15

### Fixed
- Fixed deleting columns when rolling back

## 7.10.2 - 2020-06-11

### Fixed
- Syntax error in user model stub

## 7.10.1 - 2020-06-11

### Fixed
- Error in lang es.json [1142](https://github.com/orchidsoftware/platform/issues/1142)

## 7.10.0 - 2020-06-10

### Added
- Two-Factor authentication [#1132](https://github.com/orchidsoftware/platform/issues/1132)
- Support for Portuguese (PT-pt) language [#1136](https://github.com/orchidsoftware/platform/pull/1136)

## 7.9.0 - 2020-06-08

### Added
- German translation [#1131](https://github.com/orchidsoftware/platform/pull/1131)

### Fixed
- Default values ​​fixed [#1109](https://github.com/orchidsoftware/platform/pull/1109)

## 7.8.0 - 2020-06-07

### Added
- Spanish translation [#1130](https://github.com/orchidsoftware/platform/pull/1130)

### Fixed
- Remove permission [#1119](https://github.com/orchidsoftware/platform/pull/1119)

## 7.7.1 - 2020-06-01

### Changed
- String `id` for attachment [#1115](https://github.com/orchidsoftware/platform/pull/1115)

## 7.7.0 - 2020-05-30

### Added
- Group field [#1112](https://github.com/orchidsoftware/platform/pull/1112)

### Deprecated
- Static method `Field::group` [#1112](https://github.com/orchidsoftware/platform/pull/1112)

## 7.6.2 - 2020-05-29

### Changed
- Print roles as default user subtitle [#1113](https://github.com/orchidsoftware/platform/pull/1113)

## 7.6.1 - 2020-05-29

### Changed
- Welcome page

## 7.6.0 - 2020-05-28

### Added
- Storage to Cropper and Image metadata [#1110](https://github.com/orchidsoftware/platform/pull/1110)
- Resizing options to Cropper [#1109](https://github.com/orchidsoftware/platform/pull/1109)

### Changed
- Arrow icons for Accordion [#1107](https://github.com/orchidsoftware/platform/pull/1107)

## 7.5.3 - 2020-05-25

### Removed
- Cleaning the non-existent methods

## 7.5.2 - 2020-05-24

### Changed
- Extend examples for install

## 7.5.1 - 2020-05-22

### Changed
- No more packagist download requests
- More space between columns [#1104](https://github.com/orchidsoftware/platform/pull/1104)

## 7.5.0 - 2020-05-19

### Added
- Title property for `Row` layout
- Request validation for `User` screen

### Changed
- Increased contrast for label forms
- Replace `Alert` to `Toast` in Notification screen
- Use `Persona` layouts for stubs
- Default avatar user

### Fixed
- Disable button focus for bootstrap 4.5
- Disable `Matrix` textarea border

## 7.4.0 - 2020-05-18

### Added
- The class that contains the strategy for determining attachment [#1100](https://github.com/orchidsoftware/platform/pull/1100)

## 7.3.0 - 2020-05-17

## Added
- Method `withoutApplyButton` and `withoutCloseButton` to modal based layouts [#1099](https://github.com/orchidsoftware/platform/pull/1099)

## 7.2.9 - 2020-05-17

### Fixed
- Support for string primary models in relations field [#1098](https://github.com/orchidsoftware/platform/pull/1098), [#1096](https://github.com/orchidsoftware/platform/pull/1096)


## 7.2.8 - 2020-05-15

### Fixed
- `Updates::requestVersion()` cache broken [#1093](https://github.com/orchidsoftware/platform/issues/1093)


## 7.2.7 - 2020-05-13

### Changed
- Update bootstrap to 4.5.0

### Fixed
- Listener layout not updating with RadioButtons [1090](https://github.com/orchidsoftware/platform/issues/1090)

## 7.2.6 - 2020-05-11

### Fixed
- Listener layout not updating with RadioButtons or Checkbox [1090](https://github.com/orchidsoftware/platform/issues/1090)

## 7.2.5 - 2020-05-07

### Fixed
- Empty avatar display

## 7.2.4 - 2020-05-06

### Fixed
- Missing slash in prefix name

## 7.2.3 - 2020-05-05

### Fixed
- Jquery < 3.5.0 security vulnerabilities

## 7.2.2 - 2020-05-04

### Deprecated
- TinyMCE field [#873](https://github.com/orchidsoftware/platform/issues/873)
- Settings [#1087](https://github.com/orchidsoftware/platform/issues/1087)


## 7.2.1 - 2020-05-04

### Fixed
- Updating the chart when it is in tabs

## 7.2.0 - 2020-05-03

### Added
- Listener layout [#774](https://github.com/orchidsoftware/platform/issues/774) , [#869](https://github.com/orchidsoftware/platform/issues/869)

### Changed
- Border type to dashed for picture/cropper
- Position badge

## 7.1.4 - 2020-04-29

### Fixed
- Double slash address generation

## 7.1.3 - 2020-04-26

### Fixed
- Removed typehinting from role id [#1083](https://github.com/orchidsoftware/platform/pull/1083)

## 7.1.2 - 2020-04-26

### Fixed
- Incomplete url address transfer in Turbolinks header [#1081](https://github.com/orchidsoftware/platform/issues/1081)

## 7.1.1 - 2020-04-24

### Fixed
- Launch of filters with empty parameter

## 7.1.0 - 2020-04-23

### Added
- Advanced settings for the chart
- Middleware to public resource [#1078](https://github.com/orchidsoftware/platform/pull/1078)

## 7.0.13 - 2020-04-19

### Changed
- Custom model attributes in selects [#1075](https://github.com/orchidsoftware/platform/pull/1075)

## 7.0.12 - 2020-04-19

### Fixed
- Check permissions for null attribute [#1074](https://github.com/orchidsoftware/platform/pull/1074)

## 7.0.11 - 2020-04-17

### Fixed
- Pagination scroll bar

## 7.0.10 - 2020-04-16

### Changed
- Using native bootstrap styles (border/shadow/margin/padding)
- Contrast for `divider`
- The `divider` method for `ItemMenu` now has a default value of true

## 7.0.9 - 2020-04-16

### Changed
- Using native bootstrap styles (border/shadow/margin/padding)
- Remove button `Back` for error page
- Position of the helps in a horizontal form.

### Fixed
- Shift work area with a wide table
- Artisan command `route::cache` duplicate `switch.logout`

## 7.0.8 - 2020-04-03

### Changed
- Rename descriptions to description for card

## 7.0.7 - 2020-03-25

### Fixed
- Conflict resolved with focus fields label and popover

## 7.0.6 - 2020-03-22

### Fixed
- Display filter in table

## 7.0.5 - 2020-03-20

### Fixed
- Date display for Carbon in install stubs
- Correct display of table cells on mobile devices [#1014](https://github.com/orchidsoftware/platform/issues/1014)

## 7.0.4 - 2020-03-18

### Fixed
- Windows separator when downloading files [#1070](https://github.com/orchidsoftware/platform/issues/1070)

## 7.0.3 - 2020-03-18

### Changed
- Access to all variables in tables [#1069](https://github.com/orchidsoftware/platform/issues/1069)

### Fixed
- Max file size null MB [#1067](https://github.com/orchidsoftware/platform/pull/1067)
- Windows separator when downloading files [#1070](https://github.com/orchidsoftware/platform/issues/1070)

## 7.0.2 - 2020-03-16

### Fixed
- Removed the restriction of the length of the name in the screen [#1066](https://github.com/orchidsoftware/platform/pull/1066)

## 7.0.1 - 2020-03-15

### Fixed
- Don't open modal after validation [#1065](https://github.com/orchidsoftware/platform/pull/1065)

## 7.0.0 - 2020-03-12

### Added
- Support Laravel 7.0
- Presenters for content [#965](https://github.com/orchidsoftware/platform/issues/965)
- Card layout [#965](https://github.com/orchidsoftware/platform/issues/965)
- Compact layout [#965](https://github.com/orchidsoftware/platform/issues/965)
- Compendium layout [#965](https://github.com/orchidsoftware/platform/issues/965)
- Facepile layout [#965](https://github.com/orchidsoftware/platform/issues/965)
- Persona layout [#965](https://github.com/orchidsoftware/platform/issues/965)
- Support blade component with `Layout::component` 

### Changed
- Rename `canHide` to `cantHide` for `TD` [#1060](https://github.com/orchidsoftware/platform/pull/1060)
- Rename `registerGlobalSearch` to `registerSearch` for `Dashboard`

### Fixed
- Not found a resource for Windows [#1056](https://github.com/orchidsoftware/platform/pull/1056)

### Removed
- Methods `asyncParameter`, `loadModalAsync` for `ModalToggle` action
- Color constant for `Alert`
- `DashboardNotification` replace `DashboardChannel` and `DashboardMessage`
- Property `width` for `Rows`
- Methods `locale`, `link`, `loadModalAsync`, `asyncRoute` for `TD`
- `PLATFORM_PATH` Constant 
- `AccessMiddleware` replace `Access`
- `Orchid\Platform\Searchable` traits replace contract for presenter

## 6.11.1 - 2020-03-03

### Fixed
- Required method for Picture/Cropper fields
- Checked for RadioButton field

## 6.11.0 - 2020-03-02

### Added
- Checking middleware permission by params

### Fixed
- Active item for menu by route name
- Display menu for small screen phones

### Changed
- Update npm packages
- White contrast for text.

## 6.10.2 - 2020-02-20

### Fixed
- Static name `setFromEloquent` for `Select` field

## 6.10.1 - 2020-02-09

### Fixed
- The update check remembers the latest available version, instead of status.

## 6.10.0 - 2020-02-06

### Added
- Added `TurbolinksLocation` middleware for the correct redirects [#1049](https://github.com/orchidsoftware/platform/issues/1049)

### Changed
- Return user to desired page [#1046](https://github.com/orchidsoftware/platform/issues/1046)
- Remember user by default [#1047](https://github.com/orchidsoftware/platform/issues/1047)

### Deprecated
- Rename `AccessMiddleware` to `Access`, previous name is outdated

### Fixed
- Old field values did not trigger an event [#1050](https://github.com/orchidsoftware/platform/issues/1050)

## 6.9.0 - 2020-01-28

### Added
- Method `maxFileSize` for `Cropper` and `Picture` fields
- Method `hideEmpty` for `ItemMenu`

### Fixed
- Accurate resource address determination

## 6.8.6 - 2020-01-25

### Fixed
- Picture field buttons layout [#1045](https://github.com/orchidsoftware/platform/pull/1045)

## 6.8.5 - 2020-01-24

### Fixed
- Redirect when debugging screen methods
- Colored buttons allowed in `commandBar`
- Position "Go back" button on the page 404
- Do not submit a form by pressing `enter`

## 6.8.4 - 2020-01-23

### Fixed
- Filter submit empty string [#1042](https://github.com/orchidsoftware/platform/issues/1042)

## 6.8.3 - 2020-01-17

### Fixed
- Logo display on the authorization form
- Change the placeholder for a field with a date

## 6.8.2 - 2020-01-14

### Fixed
- MSSQL datetime format for last login

## 6.8.1 - 2020-01-12

### Changed
- Optional parameters for width and height [#1041](https://github.com/orchidsoftware/platform/issues/1041)

### Fixed
- Brand display when spelling incorrect

## 6.8.0 - 2020-01-09

### Added
- Rubber layout
- Dusk testing browser
- Channel to send a notification [#1038](https://github.com/orchidsoftware/platform/issues/1038)
- Dynamic columns [#1003](https://github.com/orchidsoftware/platform/issues/1003)

### Changed
- First look enhancement
- Cursor loading animations
- Indented icons are stylized
- Source is optional for form builder
- Extend the user model that comes with the installation [#1039](https://github.com/orchidsoftware/platform/issues/1039)
- Do not generate `id` for default buttons

### Fixed
- Sort&Filter generator
- Loading files for cropper and picture (only images)
- Display of modal window title in Utm field
- Duplication bug fixed using map search

## 6.7.3 - 2019-12-04

### Fixed
- Data for the datetimer field does not work [#1024](https://github.com/orchidsoftware/platform/pull/1024)

## 6.7.2 - 2019-12-03

### Fixed
- Allow custom `id` from fields [#1022](https://github.com/orchidsoftware/platform/issues/1022)
- The old input value is displayed on error.
- Incorrect use `JSON_THROW_ON_ERROR` for `php7.2`

## 6.7.1 - 2019-11-26

### Fixed
- Added space from attributes generator

## 6.7.0 - 2019-11-26

### Added
- Method `displayAppend` for relation field [#877](https://github.com/orchidsoftware/platform/issues/877)

## 6.6.0 - 2019-11-24

### Added
- Method `asyncParameters` for ModalToggle
- Notification background update and tab synchronization [#1009](https://github.com/orchidsoftware/platform/issues/1009)
- Blade directive `@attributes`

### Changed
- Update npm packages

### Deprecated
- Method `asyncParameter` for ModalToggle

### Fixed
- Init class to get PHP system parameters [#1019](https://github.com/orchidsoftware/platform/issues/1019)
- Upload field error notification [#1019](https://github.com/orchidsoftware/platform/issues/1019)

## 6.5.3 - 2019-11-13

### Changed
- Dark favicon for future notice

### Deprecated
- Invalid line width property

### Fixed
- Aligning notifications and badges
- Allow date timer clear on request. Added data attributes for the fields.

## 6.5.2 - 2019-11-09

### Fixed
- Async modals not send argument [#1015](https://github.com/orchidsoftware/platform/issues/1015)

## 6.5.1 - 2019-11-06

### Fixed
- Firefox 70.* - form submit do nothing [#1013](https://github.com/orchidsoftware/platform/issues/1013)

## 6.5.0 - 2019-11-06

### Added
- Short record to create a table [#1010](https://github.com/orchidsoftware/platform/pull/1010)

### Fixed
- Error on saving user [#1011](https://github.com/orchidsoftware/platform/issues/1011)
- Display simple pagination

## 6.4.2 - 2019-11-05

### Fixed
- Issue with the relation when value is not iterable for the fromCass method [#1007](https://github.com/orchidsoftware/platform/pull/1007)
- Translate user table dropdown action text [#1008](https://github.com/orchidsoftware/platform/pull/1008)

## 6.4.1 - 2019-11-01

### Changed
- Allowed to pass html to notification messages. [#1002](https://github.com/orchidsoftware/platform/pull/1002)

### Fixed
- Setting string type default value [#1004](https://github.com/orchidsoftware/platform/issues/1004)

## 6.4.0 - 2019-10-29

### Added
- Support for embedding dependencies in layouts [#986](https://github.com/orchidsoftware/platform/issues/986)
- Toast notifications [#998](https://github.com/orchidsoftware/platform/issues/998)
- Forced conversion of an object to a string [#997](https://github.com/orchidsoftware/platform/issues/997)
- Extended example screens

### Changed
- Action optional name [#996](https://github.com/orchidsoftware/platform/issues/996)
- Improved display of commandBar on mobile device
- Improved display of button in table
- Static analyzer errors fixed
- Appearance of custom notifications

### Fixed
- `removeMaskOnSubmit` dont work [#982](https://github.com/orchidsoftware/platform/issues/982)
- `Radiobutton` does not substitute old value [#990](https://github.com/orchidsoftware/platform/issues/990)
- Links to filters docs in welcome page [#955](https://github.com/orchidsoftware/platform/pull/995)
- Error display (ignition) when submitting the form [#952](https://github.com/orchidsoftware/platform/issues/952)
- Error when using `ViewField` [#970](https://github.com/orchidsoftware/platform/issues/970)

### Deprecated
- `loadModalAsync` method for TD/ModalToggle
- `asyncRoute/locale/link` methods for TD
- Constant `PLATFORM_PATH`

## 6.3.2 - 2019-10-12

### Changed
- Icon for notifications for more than 9 messages

### Fixed
- Event for submit screen form [#982]

## 6.3.1 - 2019-10-09

### Fixed
- Error submitting form [984](https://github.com/orchidsoftware/platform/issues/984)
- Align th from table

## 6.3.0 - 2019-10-05

### Added
- Creating class from service container[986](https://github.com/orchidsoftware/platform/issues/986)
- New trait `Commander`

### Changed
- Show/hide mod for password on authorization form

### Fixed
- `removeMaskOnSubmit` dont work [982](https://github.com/orchidsoftware/platform/issues/982)
- Error loading identical files with different names
- Incorrect filter alignment


## 6.2.0 - 2019-09-30

### Added
- Option to disable js handlers for Button & Link [971](https://github.com/orchidsoftware/platform/issues/971)
- The ability to make the table striped [968](https://github.com/orchidsoftware/platform/pull/968)
- Radio and Matrix field for example

### Fixed
- Animation for submit button in modal window


## 6.1.4 - 2019-09-23

### Fixed
- Scope not working in Relation [961](https://github.com/orchidsoftware/platform/pull/961)

## 6.1.3 - 2019-09-23

### Fixed
- Submit modal forms by AJAX

## 6.1.2 - 2019-09-20

### Added
- Method confirm for Button

### Removed
- CSS class `dropdown-item` for all Action

## 6.1.1 - 2019-09-18

### Fixed
- Table responsive [954](https://github.com/orchidsoftware/platform/pull/954)

## 6.1.0 - 2019-09-18

### Added
- Matrix field [910](https://github.com/orchidsoftware/platform/issues/910)

### Changed
- Command `orchid:link` now adds new paths [951](https://github.com/orchidsoftware/platform/pull/951)
- Disabled csrf token for page not found

### Fixed
- ModalToggle class override [949](https://github.com/orchidsoftware/platform/pull/949)
- Rewrite document content [952](https://github.com/orchidsoftware/platform/issues/952)
- Serialize layouts [955](https://github.com/orchidsoftware/platform/issues/955)

## 6.0.2 - 2019-09-09

### Fixed
- Password modal window does not load
- Save button name for builder

## 6.0.1 - 2019-09-09

### Fixed
- Displaying the right modal window with a large count elements
- Update stimulus-flatpickr [816](https://github.com/orchidsoftware/platform/issues/816)

## 6.0.0 - 2019-09-08

### Added
- Support for laravel 6.0
- Method `novalidate` for Button [937](https://github.com/orchidsoftware/platform/issues/937)

### Changed
- Rename Orchid/Platform/Presets to Orchid/Presets
- Access to properties and methods for removing visual noise
- Rename commands to actions
- Rename properties `data` to `target`

### Fixed
- Duplicate form submission [940](https://github.com/orchidsoftware/platform/issues/940)

### Removed
- Support php 7.1
- Announcement [917](https://github.com/orchidsoftware/platform/issues/917)
- Deprecated methods

## 5.5.5 - 2019-08-23

### Fixed
- Show error message for helps

## 5.5.4 - 2019-08-21

### Fixed
- Relation field and fromClass method [934](https://github.com/orchidsoftware/platform/issues/934)
- Inaccurate translations [936](https://github.com/orchidsoftware/platform/pull/936)

## 5.5.3 - 2019-08-15

### Added
- Exception if file could not be read [931](https://github.com/orchidsoftware/platform/issues/931)

### Changed
- Welcome page text
- Do not delete table when migrating back [932](https://github.com/orchidsoftware/platform/issues/932)

## 5.5.2 - 2019-08-12

### Added
- Link for documentation [929](https://github.com/orchidsoftware/platform/issues/929)

### Changed
- Hide buttons for empty notifications

### Fixed
- Open media modal on save attachment
- Not show previously value [927](https://github.com/orchidsoftware/platform/issues/927)
- False triggering of the update indicator for dev version [929](https://github.com/orchidsoftware/platform/issues/929)

## 5.5.1 - 2019-08-08

### Changed
- Improved mobile device support

### Fixed
- Undeclared scope [925](https://github.com/orchidsoftware/platform/pull/925)

### Removed
- Custom css grid
 
## 5.5.0 - 2019-07-30

### Added
- Preset for source code [915](https://github.com/orchidsoftware/platform/issues/915)
- Alerts on max files reached for Upload field [908](https://github.com/orchidsoftware/platform/pull/908)

### Changed
- Updated node packages

### Fixed
- Weird behavior with checkboxes in table layout [920](https://github.com/orchidsoftware/platform/issues/920)
- Unexpected line break in code field
- Issue with the multiple files for Upload field [908](https://github.com/orchidsoftware/platform/pull/908)

## 5.4.0 - 2019-07-28

### Added
- Radio field
- Page for result global search [907](https://github.com/orchidsoftware/platform/issues/907)

### Changed
- `searchQuery` must now return `Laravel\Scout\Builder`

### Fixed
- Fixed a typo [919](https://github.com/orchidsoftware/platform/pull/919)

## 5.3.0 - 2019-07-22

### Added
- `arguments` for Link/Button submit [911](https://github.com/orchidsoftware/platform/issues/911)

### Changed
- Style for tabs
- Increased aside width

### Fixed
- Translation for Russian language

## 5.2.1 - 2019-07-11

### Changed
- Display one `Filter` in layouts

### Fixed
- Permission for layouts
- Translation notification screen [909](https://github.com/orchidsoftware/platform/pull/909)
- Duplicate `modify` for Field
- Fix issue with the relation query -> search [906](https://github.com/orchidsoftware/platform/pull/906)

### Deprecated
- `modify` for Field

## 5.2.0 - 2019-07-08

### Added
- Page for notifications
- Defer for the scripts [902](https://github.com/orchidsoftware/platform/pull/902)
- Added methods `textNotFound`, `subNotFound` and `iconNotFound` for `Table`. To control the appearance of an empty table

### Fixed
- The "empty" method changed keys [905](https://github.com/orchidsoftware/platform/pull/905)

## 5.1.2 - 2019-06-26

### Added
- Debounce to prevent a lot of requests on keyUp action [898](https://github.com/orchidsoftware/platform/pull/898)

### Fixed
- Existing elements: multiple elements adding on init action [898](https://github.com/orchidsoftware/platform/pull/898)
- Sorting. Upload reordering the sorted elements [898](https://github.com/orchidsoftware/platform/pull/898)
- Error if name field array [896](https://github.com/orchidsoftware/platform/pull/896)
- Multiple fields for filters

## 5.1.1 - 2019-06-20

### Added
- Check method for Alert

### Deprecated
- ItemMenu method `show` use `canSee`

### Fixed
- Relation field null search string [894](https://github.com/orchidsoftware/platform/pull/894)

## 5.1.0 - 2019-06-17

### Added
- View template for Alert [892](https://github.com/orchidsoftware/platform/issues/892)

## 5.0.5 - 2019-06-16

### Added
- Relation field method `fromClass` [888](https://github.com/orchidsoftware/platform/pull/888)
- TimeZone field [890](https://github.com/orchidsoftware/platform/issues/890)

### Fixed
- Relation field [893](https://github.com/orchidsoftware/platform/issues/893)

## 5.0.4 - 2019-06-11

### Fixed
- Setting rewrite cache keys

## 5.0.3 - 2019-06-09

### Added
- Read only for `Qill` field
- Placeholder for `Qill` field
- Ability to publish migration files

## 5.0.2 - 2019-06-08

### Added
- Read only for `Code` field
- Language supported constants for `Code` field

## 5.0.1 - 2019-06-08

### Fixed
- Remove permission registration for comments and category [880](https://github.com/orchidsoftware/platform/issues/880)
- Needed permissions to roles and users screens [884](https://github.com/orchidsoftware/platform/issues/884)
- Redirect after authorization has been changed to the main page

## 5.0.0 - 2019-06-02

### Added
- `Cropper` method `targetUrl`, `targetRelativeUrl`, `targetId` [850](https://github.com/orchidsoftware/platform/issues/850)
- `Upload` field takes array of numeric values [851](https://github.com/orchidsoftware/platform/issues/851)
- Property `name` for `Filter`
- `TD` method `canSee`
- Auto substitution from previous session [824](https://github.com/orchidsoftware/platform/issues/824)
- Select lazyload multiple [772](https://github.com/orchidsoftware/platform/issues/772)

### Changed
- Rename `Picture` field to `Cropper`
- Redesigned structure blade templates

### Fixed
- Use checkbox in table [874](https://github.com/orchidsoftware/platform/issues/874)
- Filter trigger by many parameter
- Safari not send form [864](https://github.com/orchidsoftware/platform/issues/864)

### Removed
-  Move package for `Press` in a separate repository [815](https://github.com/orchidsoftware/platform/issues/815)
- `Orchid\Dashboard\ItemMenu::groupName()` use `title` method [842](https://github.com/orchidsoftware/platform/issues/842)
- `Entity` property `groupname` use `title` [842](https://github.com/orchidsoftware/platform/issues/842)
- `Orchid\Platform\Filters\*` use `Orchid\Filters\*`
- `AttachTrait` use `Orchid\Attachment\Attachable`
- `FilterTrait` use `Orchid\Filters\Filterable`
- Sluggable package
- Widget package

## 4.7.1 - 2019-04-24

### Added
- Trait `AsSource.php` for Eloquent model 
- Only time for `DateTimer` field

### Fixed
- Avatar jumping when refreshing page

## 4.7.0 - 2019-04-22

### Added
- Method `filtersApplySelection` for all filter in selection

## 4.6.3 - 2019-04-21

### Added
- `Empty` method Allowing  value to the sample for the default operation (usually empty) [839](https://github.com/orchidsoftware/platform/pull/839)

### Changed
- Documentation move [repository website](https://github.com/orchidsoftware/orchid.software)

### Deprecated
- `Orchid\Dashboard\ItemMenu::groupName()` use `title` method [842](https://github.com/orchidsoftware/platform/issues/842)
- `Entity` property `groupname` use `title` [842](https://github.com/orchidsoftware/platform/issues/842)

## 4.6.2 - 2019-04-19

### Changed
- Chart min heating auto
- Cache browser views

### Fixed
- Repeated run test to create resource links
- Http sorting for allow property
- Http request problem, to remove '/' [from last path of the url](https://stackoverflow.com/a/47478891).
- Input mask is null or empty, cant not type japanese character.
- When the resource has the same name with another extension.

### Deprecated
- `Orchid\Platform\Filters\*` use `Orchid\Filters\Filter\*`
- `AttachTrait` use `Orchid\Attachment\Attachable`
- `FilterTrait` use `Orchid\Filters\Filterable`

## 4.6.1 - 2019-04-16

### Changed
- Reload template for profile for back history

### Fixed
- Icon for accordion
- Double defined time controller
- Injected SQL for Spatie builder

## 4.6.0 - 2019-04-15

### Added
- `Layout::accordion` [834](https://github.com/orchidsoftware/platform/pull/834)

## 4.5.1 - 2019-04-13

### Fixed
- Custom auth

## 4.5.0 - 2019-04-12

### Added
- `Layout::wrapper` [827](https://github.com/orchidsoftware/platform/pull/827)

### Changed
- `Layouts` class rename to `Layout` [833](https://github.com/orchidsoftware/platform/issues/833) 
- Login/Registration page
- The color scheme has become more neutral [815](https://github.com/orchidsoftware/platform/issues/815)

### Fixed
- Uncaught ReferenceError: `platform` is not defined

## 4.4.4 - 2019-03-26

### Added
- User filter for foles [823](https://github.com/orchidsoftware/platform/pull/823)

## 4.4.3 - 2019-03-25

### Fixed
- Error in select field [822](https://github.com/orchidsoftware/platform/pull/822)
- Padding for columns

## 4.4.2 - 2019-03-24

### Fixed
- Revert [821](https://github.com/orchidsoftware/platform/pull/821)

## 4.4.1 - 2019-03-23

### Fixed
- Error in select field [821](https://github.com/orchidsoftware/platform/pull/821)
- `DataTime` method enableTime [820](https://github.com/orchidsoftware/platform/pull/820)

## 4.4.0 - 2019-03-22

### Changed
- Color scheme, no more brand color
- Padding for layouts

### Fixed
- Entity sorting default
- `DataTime` method enableTime [816](https://github.com/orchidsoftware/platform/issues/816)

### Removed
- All dependency
- `Cache` block [810](https://github.com/orchidsoftware/platform/issues/810)

## 4.3.4 - 2019-03-17

### Added
- Button field [807](https://github.com/orchidsoftware/platform/issues/807)

### Changed
- Rename `setLabel` to `label` for Collapse

### Fixed
- Show text for `Label` field

### Deprecated
- `set` prefix for ItemMenu, ItemPermission, TD [809](https://github.com/orchidsoftware/platform/issues/809)

## 4.3.3 - 2019-03-15

### Fixed
- Fix for where `attchments` argument group

## 4.3.2 - 2019-03-14

### Fixed
- Fix for command's bar link [806](https://github.com/orchidsoftware/platform/pull/806)

## 4.3.1 - 2019-03-13

### Added
- Missing translation

## 4.3.0 - 2019-03-13

### Added
- Collapse layouts
- Animation for submit button

### Changed
- Entity no longer has a default icon
- Improved interaction experience on mobile devices 
- Modals not require route name
- Remove "close" button for menu
- Rename "reset" button menu as "close"

### Fixed
- Send post request for create menu element
- Icon for `Password` field
- Entities show activity
- Dublicate cache for TinyMCE field

### Removed
- Remove dependency `spomky-labs/base64url`

## 4.2.0 - 2019-03-10

### Added
- Source modify value for select [798](https://github.com/orchidsoftware/platform/issues/798#issuecomment-471326038)
- Options for show/hidden password [801](https://github.com/orchidsoftware/platform/issues/801)

### Fixed
- Change password for default screen 

### Deprecated
- Method `getStatusRoles()` for User model

## 4.1.1 - 2019-03-10

### Fixed
- Relationship nullable [797](https://github.com/orchidsoftware/platform/issues/797)
- DateRange not send value

## 4.1.0 - 2019-03-09

### Added
- Event for install orchid [795](https://github.com/orchidsoftware/platform/issues/795)
- Source for select [798](https://github.com/orchidsoftware/platform/issues/798)
- Method for control date time [794](https://github.com/orchidsoftware/platform/issues/794)

### Fixed
- Return exception message for create admin command [796](https://github.com/orchidsoftware/platform/issues/796)

## 4.0.1 - 2019-03-04

### Fixed
- Laravel user `bigInteger` id
- Load factory only test

## 4.0.0 - 2019-03-03

### Added
- Export metrics button
- Support laravel 5.8
- Support phpunit 8.0
- Added tips for phpdoc

### Changed
- By default, the panel is available from any domain.
- Remove postfix `Field` for all
- The context of the routes has been changed to `$this->router`. 
Due to changes in the framework, you can also use the structure through the facade `Route::get`.
- Reworked layer display engine

### Removed
- `dashboard_domain` helper
- Media [780](https://github.com/orchidsoftware/platform/issues/780)
- Deprecated params to `->setRoute(route('platform.*'))` for menu
- `Dashboard::registerPermissions` accept array argument

## 3.11.0 - 2019-02-25

### Added
- New field RadioButtonsField

### Fixed
- Multiple heritage activity in the menu

## 3.10.6 - 2019-02-25

### Changed
- Display permission for hidden entity
- Auto set active for menu
- Set default Icon for menu
- Default `true` params for childs menu

## 3.10.5 - 2019-02-25

### Changed
- Padding sub-element menu

## 3.10.4 - 2019-02-25

### Changed
- ItemMenu allow array or string with `setActive` method
- Colors for pagination
- Unification of button colors
- If a submenu is declared, then activation will come from the child elements.

### Fixed
- Padding for numeric filter
- Drop test when displaying prohibited characters

## 3.10.3 - 2019-02-22

### Changed
- Display error pages

### Fixed
- 405 Method Not Allowed for Ajax
- Positioning buttons in password recovery forms

### Deprecated
- params to `->setRoute(route('platform.*'))`
  This method will be saved, but will explicitly respond to its name.
  If you want to create links otherwise use `->setUrl()`

## 3.10.1 - 2019-02-22

### Fixed
- Disabled preview for turbolinks

## 3.10.0 - 2019-02-22

### Added
- Macros for TD [785](https://github.com/orchidsoftware/platform/issues/785)

### Changed
- Removed links for welcome template [786](https://github.com/orchidsoftware/platform/issues/786)
- Enabled cache for turbolinks
- Chart not responsive

### Fixed
- Modal not open PictureField [787](https://github.com/orchidsoftware/platform/issues/787)
- Error for resize event 
- Route cache not register route

## 3.9.6 - 2019-02-15

### Changed
- Revert command `orchid:link` for symlink resource

## 3.9.5 - 2019-02-14

### Changed
- Turbolink no-cache all page
- Removed years for license

### Fixed
- Update `csrf` token

### Deprecated
- `Dashboard::registerPermissions` accept array argument

## 3.9.4 - 2019-02-14

### Changed
- Jquery-ui replace sortablejs

### Fixed
- Chart not remove event see https://github.com/frappe/charts/issues/212
- Remove mask for submit

## 3.9.3 - 2019-02-13

### Changed
- Basic forms now use AJAX

### Fixed
- Validation form responsive
- Submit form event [783](https://github.com/orchidsoftware/platform/issues/783)

## 3.9.2 - 2019-02-11

### Added
- Ajax for base screen form

### Fixed
- Original name edit attachment

## 3.9.1 - 2019-02-11

### Fixed
- Load tinyMCE theme

## 3.9.0 - 2019-02-10

### Changed
- Laravel Scout upgrade to ^7.0
- Route `platform.resource` has a panel prefix

### Fixed
- Show model animate [778](https://github.com/orchidsoftware/platform/issues/778)

### Removed
- Backups as a package [769](https://github.com/orchidsoftware/platform/issues/769)
- Builder as package [770](https://github.com/orchidsoftware/platform/issues/770)

## 3.8.1 - 2019-02-09

### Fixed
- Install rewrite user model [777](https://github.com/orchidsoftware/platform/issues/777)

## 3.8.0 - 2019-02-07

### Added
- Route `platform.resource` for static file from package
- Register `public` directory for packages `addPublicDirectory` and `getPublicDirectory`
- Function `orchid_mix` for packages

### Fixed
- Route cache closure

### Removed
- Command `orchid:link`
- Method for clear opcache

## 3.7.5 - 2019-02-04

### Fixed
- Redirect entity for save

### Removed
- dependency `composer/semver`

## 3.7.4 - 2019-02-03

### Changed
- Menus can no longer be filled with an array.

### Fixed
- Sorting with nesting attachment

## 3.7.3 - 2019-02-02

### Changed
- Color palette, indents of elements and minor edits
- The image field no longer supports additional features.

### Fixed
- Opening file information in modal window

## 3.7.2 - 2019-02-01

### Fixed
- Correct slug (id) generation for the input field
- Fixed rights verification in the screen when the value of the array

## 3.7.1 - 2019-01-31

### Fixed
- Entity route generator

## 3.7.0 - 2019-01-28

### Changed
- Entities have been transferred to use screens [721](https://github.com/orchidsoftware/platform/issues/721)

### Fixed
- The order of dependencies and their types returns incorrect values ​​in the screens

## 3.6.2 - 2019-01-24

### Fixed
- Can't use registerResource in package [765](https://github.com/orchidsoftware/platform/issues/765)

### Removed
- DashboardServiceProvider

## 3.6.1 - 2019-01-19

### Fixed
- Margin menu

## 3.6.0 - 2019-01-19

### Added
- New Switches fields

### Changed
- Footer is now pressed to the bottom of the page
- The free area between the menu and the footer is the "Up" button

## [3.5.1] - 2019-01-18

### Fixed
- Help string for horizontal form
- Model builder relations

## [3.5.0] - 2019-01-16

### Added
- Field method `canSee` [759](https://github.com/orchidsoftware/platform/pull/759)

### Changed
- Link method `show` rename `canSee` [759](https://github.com/orchidsoftware/platform/pull/759)

### Removed
- Link method `show` [759](https://github.com/orchidsoftware/platform/pull/759)

## [3.4.2] - 2019-01-13

### Changed
- Rename `TypeException` to `EntityTypeException`

### Removed
- Unused `registerFiled` and `getField` for Dashboard

## [3.4.1] - 2019-01-12

### Fixed
- Removed unnecessary foreach in selection.blade.php [758](https://github.com/orchidsoftware/platform/pull/758)

## [3.4.0] - 2019-01-11

### Added
- Date ranged field
- TD align constant
- Selection layout for filters [753](https://github.com/orchidsoftware/platform/issues/753)

### Changed
- Filters can no longer view

### Removed
- Filter property `$dashboard`
- Filters for table

### Fixed
- Correct tips for Field

## [3.3.4] - 2018-12-31

### Changed

- Acync modal & User table edit

## [3.3.3] - 2018-12-27

### Changed

- MapField autoscroll [755](https://github.com/orchidsoftware/platform/pull/755)

### Removed

- Method `hero` for Post Models

## [3.2.2] - 2018-12-24

### Fixed
- UploadField multiple upload file

## [3.2.1] - 2018-12-23

### Fixed
- Collection by default not set keys, mixed items unpredictable. [752](https://github.com/orchidsoftware/platform/pull/752)

## [3.2.0] - 2018-12-22

### Changed
- Rename `Demo` to `Example` entity

### Removed
- The modal support service window has been removed in favor of creating custom forms, since the set of fields and the template could not be changed

## [3.1.8] - 2018-12-22

### Added
- Attributes rel="noopener" for target "_blank"

### Removed
- Divider for entities because visually does not share

## [3.1.7] - 2018-12-17

### Fixed
- Publish `PressServiceProvider` files during installation

## [3.1.6] - 2018-12-14

### Added
- Attribute `height` for Quill / TinyMCE / Map / Code Fields

### Removed
- User localization column

## [3.1.5] - 2018-12-12

### Fixed
- Publish `PressServiceProvider` files during installation

## [3.1.4] - 2018-12-09

### Added
- Global variable `Controller`

### Removed
- Unused Image package dependency
- Unused `JsonRelationsTrait`

## [3.1.3] - 2018-12-06

### Deprecated
- JsonRelationsTrait

### Removed
- Attachment method `read`

## [3.1.2] - 2018-12-04

### Fixed
- Display html for Quill

## [3.1.1] - 2018-12-04

### Added
- Property zoom for maps field

### Fixed
- Show maps coordinates

## [3.1.0] - 2018-12-04

### Added
- Support `argon` hash driver
- Method `canSee` in layout for check display [733](https://github.com/orchidsoftware/platform/issues/733)
- Popovers for fields [734](https://github.com/orchidsoftware/platform/issues/734)
- Field maps leafletjs [714](https://github.com/orchidsoftware/platform/issues/714)
- Quill editor field [724](https://github.com/orchidsoftware/platform/issues/724)

### Changed
- Method `url()` Attachment first parameter is the default value.
- Route use class [729](https://github.com/orchidsoftware/platform/issues/729)
- Route helper `->screen()` no longer requires the third parameter as mandatory, use `->screen(...)->name()`

### Removed
- Google Maps field
- Attachment no longer create copies of images. [719](https://github.com/orchidsoftware/platform/issues/719). Use events for your own creation or packages to create cdn, for example, [Intervention/imagecache](https://github.com/Intervention/imagecache)
- Widget systems now in a separate [package](https://github.com/orchidsoftware/widget)

## [3.0.8] - 2018-11-16

### Fixed
- Input mask array [725](https://github.com/orchidsoftware/platform/issues/725)

## [3.0.7] - 2018-11-15

### Fixed
- Translations

## [3.0.5] - 2018-11-10

### Fixed
- double group name for dropdown menu [718](https://github.com/orchidsoftware/platform/issues/718)

## [3.0.3] - 2018-11-08

### Added
- Example tags from Entities

### Fixed
- always `true` value for builder

## [3.0.2] - 2018-11-07

### Added
- Sort entity from menu [709](https://github.com/orchidsoftware/platform/pull/713)
- Automatically generated language translations for de,es,hi,ru,zh

### Changed
- Hidden support modal from `null` [711](https://github.com/orchidsoftware/platform/pull/711)
- Remove create user from default screen [707](https://github.com/orchidsoftware/platform/pull/707)


## [3.0.1] - 2018-11-06

### Added
- jQuery global  [709](https://github.com/orchidsoftware/platform/pull/709)
- Sub menu [709](https://github.com/orchidsoftware/platform/pull/709)

### Deprecated
- Field::tag use `make` method [710](https://github.com/orchidsoftware/platform/issues/710)

### Fixed
- Migration rollback  [708](https://github.com/orchidsoftware/platform/pull/708)


## [3.0] - 2018-10-29

### Added
- Grouping items using Field::group 
- TD::link and TD::linkPost
- Sorting capability for TD [437](https://github.com/orchidsoftware/platform/issues/437)
- Property display for page
- Added ability to change the logo [354](https://github.com/orchidsoftware/platform/issues/354)
- New command for easy installation `orchid:install` [622](https://github.com/orchidsoftware/platform/issues/622)
- User routes for dashboard
- Custom templates for the sidebar [631](https://github.com/orchidsoftware/platform/issues/631)
- Saved the state of the tabs [666](https://github.com/orchidsoftware/platform/issues/666)
- Added permission for cache

### Deprecated
- TD::name and TD::title use TD::set

### Changed
- Test migration pgsql to sqlite
- User routes for dashboard
- The package was divided into several internal structures (Platform & Press) [634](https://github.com/orchidsoftware/platform/issues/634)
- Rename 'dashboard' to 'platform'
- Order of calling functions in the screen, now the query is executed earlier

### Fixed
- Require to required
- Hide the menu without children
- Deletes a file only if there are no more links [570](https://github.com/orchidsoftware/platform/issues/570)
- Users and roles use screens [579](https://github.com/orchidsoftware/platform/issues/579)
- Deleting a dashboard store [623](https://github.com/orchidsoftware/platform/issues/623)

### Removed
- Bootstrap 3 appendix
- "Delete" button by default in the image field
- String record of parameters for building a form [391](https://github.com/orchidsoftware/platform/issues/391)


## [2.2.4] - 2018-08-28

### Fixed
- Save menu dublicate
- Laravel RouteServiceProvider default namespace override [680](https://github.com/orchidsoftware/platform/issues/680)


## [2.2.4] - 2018-08-28

### Fixed
- Save menu dublicate
- Laravel RouteServiceProvider default namespace override

### Removed
- Font Awesome

## [2.2.3] - 2018-03-01
### Added
- Ukrainian language [595](https://github.com/orchidsoftware/platform/pull/595)

### Changed
- Order of items in the media, first folders then files
- Font Awesome replaced by ORCHID icons

### Fixed
- Flying icon when dragging in the menu
- Sorting menu

## [2.2.2] - 2018-02-18
### Added
- Menu validation [537](https://github.com/orchidsoftware/platform/issues/537)
- Translation of notifications

### Changed
- Jquery load replace turbolink

## [2.2.1] - 2018-02-16

### Added
- Link to attachment [525](https://github.com/orchidsoftware/platform/issues/525)

### Fixed
- Base64 URL Safe  [1](https://github.com/tabuna/tutorial_create_profile_for_orchid/issues/1)
- Double file extension  [526](https://github.com/orchidsoftware/platform/issues/526)

### Changed
- Font Awesome replaced by ORCHID icons
- config "slog" is default

### Removed
- Icon for group

## [2.2.0] - 2018-02-12
### Added
- TinyMCE toolbar #522

### Changed
- Upgrade to Laravel 5.6

### Removed
- Avatar user for database

## [2.1.3] - 2018-02-11

### Fixed
- Default value for select2 AJAX
- Hide password for field

## [2.1.2] - 2018-02-09

### Fixed
- Create of category

## [2.1.1] - 2018-02-09

### Fixed
- Display of the third level menu
- Graphs occupy a full block

## [2.1.0] - 2018-02-09

### Added
- "DIV" Layouts
- "Select" field
- "Show" key for admin menu
- Command `make:chart`
- ORCHID Icons
- Error message validate for forms. #468

### Changed
- Upgrade to Bootstrap 4.0
- Entities and Layouts has a separate folder
- Record fields as objects #391
- Demo "entities" are no longer published
- Access validation does not create multiple database queries
- Hide forms switching with their small number
- Changing the menu, no longer changing the recording number
- Color pallet for graphs
- Design of the file manager

### Deprecated
- Record string/array for fields. Use `Field::make`

### Removed
- google analytics
- robot field
- Simple line icons

## [2.0.14] - 2018-01-16

### Fixed
- Error as select menu "demo post" #457 

## [2.0.11] - 2018-01-09

### Added
- Parameter "format" for "croppie.result" #398
- Displaying old data for validation errors 

### Changed
- Remove source map `npm run production`

### Fixed
- calling relation for new object in template #394
- reset child categories when the parent is deleted

## [2.0.10] - 2017-12-29

### Fixed
- Namespace syntax
- Create empty category

## [2.0.9] - 2017-12-29
### Changed
- Optimization for parser

### Fixed
- Bug name permission for pages

## [2.0.8] - 2017-12-27
### Added 
- Input Mask

### Changed
- Section wrapper remove
- Input build named
- "Not found" message occupies the entire screen
- Error 403 to 404

### Fixed
- Bug permission for entities
- Style for select2
- Calling relation for new object in template #382

## [2.0.7] - 2017-12-19
### Added 
- Thai language
- Fix paginate style
- Width for table

### Changed
- Replacing `less` with` sass`
- Modifying paths `app\Http\Screens` to `app\Http\Controllers\Screens`
- Modifying paths `app\Http\Layouts` to `app\Core\Layouts`

### Fixed
- Sort argument for method Screen
- Remove publish_at from `category`


## [2.0.6] - 2017-12-10
### Added 
- Link method title and modal method
- Fix paginate style

## [2.0.5] - 2017-12-10
### Added 
- Left menu notification
- New button logout
- Added markdown fiends
- Fields picture added stub entities
- Fields SimpleMDE added stub entities

### Deprecated
- Deprecated widget Google analytics

### Removed
- Removed right notification
- Removed right menu
- Removed time picker css

### Fixed
- Video icon to file manager
- Display Area in Chrome 63  

## [2.0.4] - 2017-12-05
### Fixed
- Pagination "..." symbol
- Pagination width
- Load reflection class for Screen

## [2.0.3] - 2017-12-04
### Fixed
- Extra character
- Duplicate error message
- Category prefix
- Update install scout


## [2.0.2] - 2017-12-02
### Added
- Laravel Mix (Manifest&version)
### Fixed
- Update npm dependencies
- Message upload filed


## [2.0.1] - 2017-12-01
### Fixed
- Widget Update


## [2.0] - 2017-12-01
### Added
- Added TinyMCE
- Added support fulltext search
- Added turbolinks
### Changed
- `public` folder is no longer published
- Attachments to each model
- The ability to duplicate a file has been removed
- Removing submodules (Will be in separate packages):
    - Graphical installation
    - Backups
    - Defender
    - Viewing logs
    - Monitor
    - Robot.txt Editor
    - Scheme
    - UTM Tag Generator
    - View all php settings (Form)

### Removed
- Removing Fields
- Removing Footer
- Removing Shortcut
- Removing summernote
- Remote publication of public files, the location of this is used by the proxy controller 

##  [1.1.5] - 2017-09-12
### Added
- Added events for role assignment and deletion


## [1.1.2] - 2017-09-06
### Changed
- Fix bug create user
- Removing unused methods
- Move google analytics to widget

## [1.1.1]
### Added
- Support Laravel 5.5

## [1.1] - 2017-08-31
### Added
- Added global permission for superadmin
### Changed
- fix config display auth
- Summernote supports "media"
- Shortcut (ctrl + s) save form

## [1.0] - 2017-08-04
### Added
- Added menu badges & notifications
- Added the ability to insert js and css code
- Unit tests written

### Removed
- Removing the Content Management System
- Rename config file "content" to "platform"
- Removed auxiliary functions
- Remove unusing fields
- Remove news subscription
