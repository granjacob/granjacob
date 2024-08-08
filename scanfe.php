<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Website</title>
	<!-- Include Angular -->
	<script src="https://unpkg.com/@angular/core/bundles/core.umd.js"></script>
	<script src="https://unpkg.com/@angular/common/bundles/common.umd.js"></script>
	<script src="https://unpkg.com/@angular/compiler/bundles/compiler.umd.js"></script>
	<script src="https://unpkg.com/@angular/platform-browser/bundles/platform-browser.umd.js"></script>
	<script src="https://unpkg.com/@angular/platform-browser-dynamic/bundles/platform-browser-dynamic.umd.js"></script>
	<script src="https://unpkg.com/@angular/http/bundles/http.umd.js"></script>
	<script src="https://unpkg.com/rxjs/bundles/Rx.umd.js"></script>
</head>
<body>
<my-app>Loading...</my-app>
<script>
    (function (ng) {
        // Define the Angular module
        var AppModule = ng.core.NgModule({
            imports: [ng.platformBrowser.BrowserModule, ng.http.HttpClientModule],
            declarations: [AppComponent],
            bootstrap: [AppComponent]
        })
            .Class({
                constructor: function () { }
            });

        // Define the AppComponent
        var AppComponent = ng.core.Component({
            selector: 'my-app',
            template: `
                    <h1>Country List</h1>
                    <button (click)="fetchCountries()">Fetch Countries</button>
                `
        })
            .Class({
                constructor: [ng.http.HttpClient, function (http) {
                    this.http = http;
                }],
                fetchCountries: function () {
                    this.http.get('http://granjacob.com/jacobbe/countries')
                        .subscribe(
                            function (response) { console.log(response); },
                            function (error) { console.error('Error fetching countries:', error); }
                        );
                }
            });

        // Bootstrap the Angular application
        ng.platformBrowserDynamic.platformBrowserDynamic().bootstrapModule(AppModule);
    })(window.ng);
</script>
</body>
</html>