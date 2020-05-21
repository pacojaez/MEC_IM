module.exports = {
    plugins: [
        // ...
        require('tailwindcss'),
        require('autoprefixer'),
        require('@fullhuman/postcss-purgecss')({
            content: [
                './views/**/*.php', /*analiza todos los directorios y todos los archivos */
                './public/index.html',
            ],
            defaultExtractor: content => content.match(/[A-Za-z0-9-_:/]+/g) || []
        })
        // ...
    ]
}