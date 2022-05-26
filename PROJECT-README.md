# WordPress Test Project
The goal of this project is to fix the broken *example-theme* and develop new layouts based on the provided Figma design.

## Getting Started and Project Information

### Prerequisites
The following plugins are required for features of this project
- [Advanced Custom Fields](https://www.advancedcustomfields.com/)

The following node packages are required for features of this project
- [Tailwind Typography](https://tailwindcss.com/docs/typography-plugin)

The following statement needs to be included as a plugin in tailwind.config.js
- `require('@tailwindcss/typography')`

### Import Content and Settings
- Import WordPress content using the file located in `/project-files/wordpresschallenge.WordPress.2022-05-26.xml`
- After the Advanced Custom Fields plugin is installed and activated, import the ACF content located in `/project-files/acf-export-2022-05-26.json`
- In the WordPress admin, navigate to Settings > Permalinks and set the **Custom Structure** to `/blog/%postname%/`
- In the WordPress admin, navigate to Settings > Reading. In the **Your homepage displays** section and set "Homepage" to `Homepage` and the "Posts Page" to `Blog`

## Where to Find Things
#### Featured Post Settings
After the prerequisites have been followed, you can find the featured post setting on the `Homepage` in the admin backend. I discuss changes I would make to this feature in the *Things I would do differently* section below. However, I decided this to be the next best solution because the homepage ID is unlikely to change.

#### Use of Tailwind
Tailwind was used in the single post template.

## Things I would do differently
- For configuring the featured post, I would install ACF Pro instead of the free version. I decided to use the free version in the event ACF Pro was not available to the code reviewer.
- Using ACF Pro, I would create an options page called **Theme Settings** where the client could access global settings. On the Theme Settings page, there would be the option to select the featured post, similar to how I created the setting on the homepage template.
- Understanding this is a test project, I used the tools provided. Otherwise, I would have used a build tool to write SCSS instead.
- Install Yoast to add meta information
- Add alt text to all images

## Author
- **Rob Mathieu** - *Full Stack Developer*
    - Email: rob@robocoder.io
    - Phone: 207-240-1357

## Comments
I appreciate your time reviewing this test project. Please reach out if you have any questions!