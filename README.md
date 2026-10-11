# Tespine Blog

A WordPress blog theme and accompanying static landing page, built for the "Testpine" site (2021-11).

## About

A custom WordPress theme (`testpine-blog-theme` naming in templates) for a blog, bundled with a separate
static marketing site (`testpine.com/`) for the same brand.

## Features

- WordPress theme template hierarchy: front page, single post, archive, search, 404, sidebar, comments
- Custom template parts for articles, categories, tags, and recent posts
- Static HTML landing page with pricing, contact and feature sections (Bootstrap-based)

## Tech stack

- PHP (WordPress theme templates)
- HTML/CSS, Bootstrap, jQuery (static landing page)

## Project structure

```
.
├── *.php                  # WordPress theme templates (front-page, single, archive, search, 404...)
├── inc/                   # Theme helper functions
├── template-parts/        # Reusable content partials
├── style.css              # Theme stylesheet (WordPress theme header)
├── testpine-blog-theme/   # Static HTML mockups of the blog theme
└── testpine.com/          # Static marketing/landing page
```

## Getting started

Install as a standard WordPress theme: copy the repository root into `wp-content/themes/`, then
activate it from the WordPress admin dashboard. The `testpine.com/` and `testpine-blog-theme/` folders
are static HTML and can be opened directly in a browser.

## Status

Archived / learning project, not actively maintained.

## License

MIT, see [LICENSE](LICENSE).
