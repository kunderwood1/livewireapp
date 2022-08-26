<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-exp.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/spectre.css/dist/spectre-icons.min.css" />
    @livewireStyles
</head>

<body>
    <div>
        <div class="hero bg-dark">
            <div class="hero-body">
                <h1 style="margin-left:20px;">Cities</h1>

            </div>
        </div>
        <div>
            <div class="container m-2">
                
                <div class="mt-1">
                    {{$slot}}
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <footer class="bg-dark">
            <div style="margin-left:20px;">
                <p>Author: Kevin Underwood</p>
                <p>Date: 6/8/21</p>
                <p>Class: cscd378</p>
                <p>Assignment 8: LiveWire</p>
            </div>
        </footer>
    </div>
    @livewireScripts
</body>

</html>
