import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",

                "/resources/views/dashboard/categories/category-js/index.js",
                "/resources/views/dashboard/categories/category-js/update-category.js",
                "/resources/views/dashboard/categories/category-js/delete.js",
                '/resources/views/dashboard/products/products-js/product.js',
                '/resources/views/dashboard/auctions/auctions-js/auction.js'
                // '/resources/js/chartJsUlitsExample/lineChart.js',
                // '/resources/js/dashborad/notfiactions/notifactions.js',
                // '/resources/js/dashborad/indexAdmin/updatePlans.js',
                // '/resources/js/dashborad/featuers/createFeatuers.js',
                // '/resources/js/dashborad/featuers/deleteFeatuer.js',
                // '/resources/js/dashborad/featuers/updateFeatures.js',
                // '/resources/js/pdfs/pdf.js',
                // '/resources/js/dashborad/landingPageSectionsEdits/editSection.js'


            ],
            refresh: true,
        }),
    ],
});
