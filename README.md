# Dhanuka-10up
This is a custom block theme developed for full site editing enabled sites and requires WordPress version 6.4 or latest.

All CSS are generated using SASS and new styles should be added only using SASS. Most of the class names are inspired by Bootstrap but it uses very simple SASS mixins and functions to generate the classes and styles.

It uses @wordpress/scripts for the build process and run following commands to start customizing or to generate nw buid files.

```
npm install
npm run start  // To start developing
npm run build // To generate new build files
```

## Dependencies

- Borghamn general plugin and the page-hero block introduced by the plugin because the theme is using that block in the header template part.
- Block Editor
- Full Site Editing Enabled