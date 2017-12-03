# Jast - Just Another Starter Theme

## Introduction

Jast is my attempt at a very simple starter theme. Think [underscores](https://github.com/Automattic/_s), but much, much more lightweight. It's not meant to be used as a theme framework, parent theme, or anything of the like. It does not pass 100% of the Theme Check tests. It's merely a starting point to building you own, custom theme — be it for .org, or a client project, or whatever.

## Setup

Git clone or download into the `/wp-content/themes/` directory.

#### Rename:

- Theme folder `jast` → `yourtheme`
- `assets/css/jast.css` → `assets/css/yourtheme.css`
- `assets/js/jast.js` → `assets/js/yourtheme.js`

#### Search/replace

- `jast_` → `yourtheme_`
- `'jast'` → `'yourtheme'`
- `JAST` → `YOURTHEME`
- `Jast` → `Your Theme`

## Suggestions

- Typically I put my theme support, widget area registration, style/script enqueueing and similar setup items in `functions.php`. Any custom template tags would go in `includes/template-tags.php`, with that being included at the top of `functions.php`. If I have to register Customizer settings, I'd create a new file in `includes/customizer.php` and include from `functions.php` as well. This pattern goes for most any vein of work that would typically placed in `functions.php`.
- All strings are output through WordPress's gettext functions, but I didn't include a POT file. This is because GlotPress/translate.wordpress.org now allow .org themes to be translated without a POT file, and multilingual plugins like Polylang and WPML don't require POT files either. If you do need to generate a POT file, I recommend [WPGulp](https://github.com/ahmadawais/WPGulp).
- This theme does not include a `page.php` or `single.php` template. In their place is a `singular.php` template that serves as a catch-all template for any singular post of any post type (`post`, `page`, `custom_post_type`, etc). Obviously, modify as needed.
- Files such as `index.php` intentionally go in and out of PHP on each new line with the assumption that you will be adding your own markup throughout.

## License

Like WordPress, Jast is licensed under [GPL2+](https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html).
