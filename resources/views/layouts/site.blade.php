<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,viewport-fit=contain,maximum-scale=1,minimum-scale=1,user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel E-commerce Website') }}</title>

    <!-- Scripts -->
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
          <style type="text/css">
            :root, :host {
             --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
             --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
             --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
             --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
             --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
             --fa-font-sharp-solid: normal 900 1em/1 "Font Awesome 6 Sharp";
             --fa-font-sharp-regular: normal 400 1em/1 "Font Awesome 6 Sharp";
             --fa-font-sharp-light: normal 300 1em/1 "Font Awesome 6 Sharp";
             --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
             }
             svg:not(:root).svg-inline--fa, svg:not(:host).svg-inline--fa {
             overflow: visible;
             box-sizing: content-box;
             }
             .svg-inline--fa {
             display: var(--fa-display, inline-block);
             height: 1em;
             overflow: visible;
             vertical-align: -0.125em;
             }
             .svg-inline--fa.fa-2xs {
             vertical-align: 0.1em;
             }
             .svg-inline--fa.fa-xs {
             vertical-align: 0em;
             }
             .svg-inline--fa.fa-sm {
             vertical-align: -0.0714285705em;
             }
             .svg-inline--fa.fa-lg {
             vertical-align: -0.2em;
             }
             .svg-inline--fa.fa-xl {
             vertical-align: -0.25em;
             }
             .svg-inline--fa.fa-2xl {
             vertical-align: -0.3125em;
             }
             .svg-inline--fa.fa-pull-left {
             margin-right: var(--fa-pull-margin, 0.3em);
             width: auto;
             }
             .svg-inline--fa.fa-pull-right {
             margin-left: var(--fa-pull-margin, 0.3em);
             width: auto;
             }
             .svg-inline--fa.fa-li {
             width: var(--fa-li-width, 2em);
             top: 0.25em;
             }
             .svg-inline--fa.fa-fw {
             width: var(--fa-fw-width, 1.25em);
             }
             .fa-layers svg.svg-inline--fa {
             bottom: 0;
             left: 0;
             margin: auto;
             position: absolute;
             right: 0;
             top: 0;
             }
             .fa-layers-counter, .fa-layers-text {
             display: inline-block;
             position: absolute;
             text-align: center;
             }
             .fa-layers {
             display: inline-block;
             height: 1em;
             position: relative;
             text-align: center;
             vertical-align: -0.125em;
             width: 1em;
             }
             .fa-layers svg.svg-inline--fa {
             -webkit-transform-origin: center center;
             transform-origin: center center;
             }
             .fa-layers-text {
             left: 50%;
             top: 50%;
             -webkit-transform: translate(-50%, -50%);
             transform: translate(-50%, -50%);
             -webkit-transform-origin: center center;
             transform-origin: center center;
             }
             .fa-layers-counter {
             background-color: var(--fa-counter-background-color, #ff253a);
             border-radius: var(--fa-counter-border-radius, 1em);
             box-sizing: border-box;
             color: var(--fa-inverse, #fff);
             line-height: var(--fa-counter-line-height, 1);
             max-width: var(--fa-counter-max-width, 5em);
             min-width: var(--fa-counter-min-width, 1.5em);
             overflow: hidden;
             padding: var(--fa-counter-padding, 0.25em 0.5em);
             right: var(--fa-right, 0);
             text-overflow: ellipsis;
             top: var(--fa-top, 0);
             -webkit-transform: scale(var(--fa-counter-scale, 0.25));
             transform: scale(var(--fa-counter-scale, 0.25));
             -webkit-transform-origin: top right;
             transform-origin: top right;
             }
             .fa-layers-bottom-right {
             bottom: var(--fa-bottom, 0);
             right: var(--fa-right, 0);
             top: auto;
             -webkit-transform: scale(var(--fa-layers-scale, 0.25));
             transform: scale(var(--fa-layers-scale, 0.25));
             -webkit-transform-origin: bottom right;
             transform-origin: bottom right;
             }
             .fa-layers-bottom-left {
             bottom: var(--fa-bottom, 0);
             left: var(--fa-left, 0);
             right: auto;
             top: auto;
             -webkit-transform: scale(var(--fa-layers-scale, 0.25));
             transform: scale(var(--fa-layers-scale, 0.25));
             -webkit-transform-origin: bottom left;
             transform-origin: bottom left;
             }
             .fa-layers-top-right {
             top: var(--fa-top, 0);
             right: var(--fa-right, 0);
             -webkit-transform: scale(var(--fa-layers-scale, 0.25));
             transform: scale(var(--fa-layers-scale, 0.25));
             -webkit-transform-origin: top right;
             transform-origin: top right;
             }
             .fa-layers-top-left {
             left: var(--fa-left, 0);
             right: auto;
             top: var(--fa-top, 0);
             -webkit-transform: scale(var(--fa-layers-scale, 0.25));
             transform: scale(var(--fa-layers-scale, 0.25));
             -webkit-transform-origin: top left;
             transform-origin: top left;
             }
             .fa-1x {
             font-size: 1em;
             }
             .fa-2x {
             font-size: 2em;
             }
             .fa-3x {
             font-size: 3em;
             }
             .fa-4x {
             font-size: 4em;
             }
             .fa-5x {
             font-size: 5em;
             }
             .fa-6x {
             font-size: 6em;
             }
             .fa-7x {
             font-size: 7em;
             }
             .fa-8x {
             font-size: 8em;
             }
             .fa-9x {
             font-size: 9em;
             }
             .fa-10x {
             font-size: 10em;
             }
             .fa-2xs {
             font-size: 0.625em;
             line-height: 0.1em;
             vertical-align: 0.225em;
             }
             .fa-xs {
             font-size: 0.75em;
             line-height: 0.0833333337em;
             vertical-align: 0.125em;
             }
             .fa-sm {
             font-size: 0.875em;
             line-height: 0.0714285718em;
             vertical-align: 0.0535714295em;
             }
             .fa-lg {
             font-size: 1.25em;
             line-height: 0.05em;
             vertical-align: -0.075em;
             }
             .fa-xl {
             font-size: 1.5em;
             line-height: 0.0416666682em;
             vertical-align: -0.125em;
             }
             .fa-2xl {
             font-size: 2em;
             line-height: 0.03125em;
             vertical-align: -0.1875em;
             }
             .fa-fw {
             text-align: center;
             width: 1.25em;
             }
             .fa-ul {
             list-style-type: none;
             margin-left: var(--fa-li-margin, 2.5em);
             padding-left: 0;
             }
             .fa-ul > li {
             position: relative;
             }
             .fa-li {
             left: calc(var(--fa-li-width, 2em) * -1);
             position: absolute;
             text-align: center;
             width: var(--fa-li-width, 2em);
             line-height: inherit;
             }
             .fa-border {
             border-color: var(--fa-border-color, #eee);
             border-radius: var(--fa-border-radius, 0.1em);
             border-style: var(--fa-border-style, solid);
             border-width: var(--fa-border-width, 0.08em);
             padding: var(--fa-border-padding, 0.2em 0.25em 0.15em);
             }
             .fa-pull-left {
             float: left;
             margin-right: var(--fa-pull-margin, 0.3em);
             }
             .fa-pull-right {
             float: right;
             margin-left: var(--fa-pull-margin, 0.3em);
             }
             .fa-beat {
             -webkit-animation-name: fa-beat;
             animation-name: fa-beat;
             -webkit-animation-delay: var(--fa-animation-delay, 0s);
             animation-delay: var(--fa-animation-delay, 0s);
             -webkit-animation-direction: var(--fa-animation-direction, normal);
             animation-direction: var(--fa-animation-direction, normal);
             -webkit-animation-duration: var(--fa-animation-duration, 1s);
             animation-duration: var(--fa-animation-duration, 1s);
             -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
             animation-timing-function: var(--fa-animation-timing, ease-in-out);
             }
             .fa-bounce {
             -webkit-animation-name: fa-bounce;
             animation-name: fa-bounce;
             -webkit-animation-delay: var(--fa-animation-delay, 0s);
             animation-delay: var(--fa-animation-delay, 0s);
             -webkit-animation-direction: var(--fa-animation-direction, normal);
             animation-direction: var(--fa-animation-direction, normal);
             -webkit-animation-duration: var(--fa-animation-duration, 1s);
             animation-duration: var(--fa-animation-duration, 1s);
             -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
             animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
             }
             .fa-fade {
             -webkit-animation-name: fa-fade;
             animation-name: fa-fade;
             -webkit-animation-delay: var(--fa-animation-delay, 0s);
             animation-delay: var(--fa-animation-delay, 0s);
             -webkit-animation-direction: var(--fa-animation-direction, normal);
             animation-direction: var(--fa-animation-direction, normal);
             -webkit-animation-duration: var(--fa-animation-duration, 1s);
             animation-duration: var(--fa-animation-duration, 1s);
             -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
             animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
             }
             .fa-beat-fade {
             -webkit-animation-name: fa-beat-fade;
             animation-name: fa-beat-fade;
             -webkit-animation-delay: var(--fa-animation-delay, 0s);
             animation-delay: var(--fa-animation-delay, 0s);
             -webkit-animation-direction: var(--fa-animation-direction, normal);
             animation-direction: var(--fa-animation-direction, normal);
             -webkit-animation-duration: var(--fa-animation-duration, 1s);
             animation-duration: var(--fa-animation-duration, 1s);
             -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
             animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
             }
             .fa-flip {
             -webkit-animation-name: fa-flip;
             animation-name: fa-flip;
             -webkit-animation-delay: var(--fa-animation-delay, 0s);
             animation-delay: var(--fa-animation-delay, 0s);
             -webkit-animation-direction: var(--fa-animation-direction, normal);
             animation-direction: var(--fa-animation-direction, normal);
             -webkit-animation-duration: var(--fa-animation-duration, 1s);
             animation-duration: var(--fa-animation-duration, 1s);
             -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
             animation-timing-function: var(--fa-animation-timing, ease-in-out);
             }
             .fa-shake {
             -webkit-animation-name: fa-shake;
             animation-name: fa-shake;
             -webkit-animation-delay: var(--fa-animation-delay, 0s);
             animation-delay: var(--fa-animation-delay, 0s);
             -webkit-animation-direction: var(--fa-animation-direction, normal);
             animation-direction: var(--fa-animation-direction, normal);
             -webkit-animation-duration: var(--fa-animation-duration, 1s);
             animation-duration: var(--fa-animation-duration, 1s);
             -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             -webkit-animation-timing-function: var(--fa-animation-timing, linear);
             animation-timing-function: var(--fa-animation-timing, linear);
             }
             .fa-spin {
             -webkit-animation-name: fa-spin;
             animation-name: fa-spin;
             -webkit-animation-delay: var(--fa-animation-delay, 0s);
             animation-delay: var(--fa-animation-delay, 0s);
             -webkit-animation-direction: var(--fa-animation-direction, normal);
             animation-direction: var(--fa-animation-direction, normal);
             -webkit-animation-duration: var(--fa-animation-duration, 2s);
             animation-duration: var(--fa-animation-duration, 2s);
             -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             -webkit-animation-timing-function: var(--fa-animation-timing, linear);
             animation-timing-function: var(--fa-animation-timing, linear);
             }
             .fa-spin-reverse {
             --fa-animation-direction: reverse;
             }
             .fa-pulse,
             .fa-spin-pulse {
             -webkit-animation-name: fa-spin;
             animation-name: fa-spin;
             -webkit-animation-direction: var(--fa-animation-direction, normal);
             animation-direction: var(--fa-animation-direction, normal);
             -webkit-animation-duration: var(--fa-animation-duration, 1s);
             animation-duration: var(--fa-animation-duration, 1s);
             -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             animation-iteration-count: var(--fa-animation-iteration-count, infinite);
             -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
             animation-timing-function: var(--fa-animation-timing, steps(8));
             }
             @media (prefers-reduced-motion: reduce) {
             .fa-beat,
             .fa-bounce,
             .fa-fade,
             .fa-beat-fade,
             .fa-flip,
             .fa-pulse,
             .fa-shake,
             .fa-spin,
             .fa-spin-pulse {
             -webkit-animation-delay: -1ms;
             animation-delay: -1ms;
             -webkit-animation-duration: 1ms;
             animation-duration: 1ms;
             -webkit-animation-iteration-count: 1;
             animation-iteration-count: 1;
             -webkit-transition-delay: 0s;
             transition-delay: 0s;
             -webkit-transition-duration: 0s;
             transition-duration: 0s;
             }
             }
             @-webkit-keyframes fa-beat {
             0%, 90% {
             -webkit-transform: scale(1);
             transform: scale(1);
             }
             45% {
             -webkit-transform: scale(var(--fa-beat-scale, 1.25));
             transform: scale(var(--fa-beat-scale, 1.25));
             }
             }
             @keyframes fa-beat {
             0%, 90% {
             -webkit-transform: scale(1);
             transform: scale(1);
             }
             45% {
             -webkit-transform: scale(var(--fa-beat-scale, 1.25));
             transform: scale(var(--fa-beat-scale, 1.25));
             }
             }
             @-webkit-keyframes fa-bounce {
             0% {
             -webkit-transform: scale(1, 1) translateY(0);
             transform: scale(1, 1) translateY(0);
             }
             10% {
             -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
             transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
             }
             30% {
             -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
             transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
             }
             50% {
             -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
             transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
             }
             57% {
             -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
             transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
             }
             64% {
             -webkit-transform: scale(1, 1) translateY(0);
             transform: scale(1, 1) translateY(0);
             }
             100% {
             -webkit-transform: scale(1, 1) translateY(0);
             transform: scale(1, 1) translateY(0);
             }
             }
             @keyframes fa-bounce {
             0% {
             -webkit-transform: scale(1, 1) translateY(0);
             transform: scale(1, 1) translateY(0);
             }
             10% {
             -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
             transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
             }
             30% {
             -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
             transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
             }
             50% {
             -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
             transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
             }
             57% {
             -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
             transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
             }
             64% {
             -webkit-transform: scale(1, 1) translateY(0);
             transform: scale(1, 1) translateY(0);
             }
             100% {
             -webkit-transform: scale(1, 1) translateY(0);
             transform: scale(1, 1) translateY(0);
             }
             }
             @-webkit-keyframes fa-fade {
             50% {
             opacity: var(--fa-fade-opacity, 0.4);
             }
             }
             @keyframes fa-fade {
             50% {
             opacity: var(--fa-fade-opacity, 0.4);
             }
             }
             @-webkit-keyframes fa-beat-fade {
             0%, 100% {
             opacity: var(--fa-beat-fade-opacity, 0.4);
             -webkit-transform: scale(1);
             transform: scale(1);
             }
             50% {
             opacity: 1;
             -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
             transform: scale(var(--fa-beat-fade-scale, 1.125));
             }
             }
             @keyframes fa-beat-fade {
             0%, 100% {
             opacity: var(--fa-beat-fade-opacity, 0.4);
             -webkit-transform: scale(1);
             transform: scale(1);
             }
             50% {
             opacity: 1;
             -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
             transform: scale(var(--fa-beat-fade-scale, 1.125));
             }
             }
             @-webkit-keyframes fa-flip {
             50% {
             -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
             transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
             }
             }
             @keyframes fa-flip {
             50% {
             -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
             transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
             }
             }
             @-webkit-keyframes fa-shake {
             0% {
             -webkit-transform: rotate(-15deg);
             transform: rotate(-15deg);
             }
             4% {
             -webkit-transform: rotate(15deg);
             transform: rotate(15deg);
             }
             8%, 24% {
             -webkit-transform: rotate(-18deg);
             transform: rotate(-18deg);
             }
             12%, 28% {
             -webkit-transform: rotate(18deg);
             transform: rotate(18deg);
             }
             16% {
             -webkit-transform: rotate(-22deg);
             transform: rotate(-22deg);
             }
             20% {
             -webkit-transform: rotate(22deg);
             transform: rotate(22deg);
             }
             32% {
             -webkit-transform: rotate(-12deg);
             transform: rotate(-12deg);
             }
             36% {
             -webkit-transform: rotate(12deg);
             transform: rotate(12deg);
             }
             40%, 100% {
             -webkit-transform: rotate(0deg);
             transform: rotate(0deg);
             }
             }
             @keyframes fa-shake {
             0% {
             -webkit-transform: rotate(-15deg);
             transform: rotate(-15deg);
             }
             4% {
             -webkit-transform: rotate(15deg);
             transform: rotate(15deg);
             }
             8%, 24% {
             -webkit-transform: rotate(-18deg);
             transform: rotate(-18deg);
             }
             12%, 28% {
             -webkit-transform: rotate(18deg);
             transform: rotate(18deg);
             }
             16% {
             -webkit-transform: rotate(-22deg);
             transform: rotate(-22deg);
             }
             20% {
             -webkit-transform: rotate(22deg);
             transform: rotate(22deg);
             }
             32% {
             -webkit-transform: rotate(-12deg);
             transform: rotate(-12deg);
             }
             36% {
             -webkit-transform: rotate(12deg);
             transform: rotate(12deg);
             }
             40%, 100% {
             -webkit-transform: rotate(0deg);
             transform: rotate(0deg);
             }
             }
             @-webkit-keyframes fa-spin {
             0% {
             -webkit-transform: rotate(0deg);
             transform: rotate(0deg);
             }
             100% {
             -webkit-transform: rotate(360deg);
             transform: rotate(360deg);
             }
             }
             @keyframes fa-spin {
             0% {
             -webkit-transform: rotate(0deg);
             transform: rotate(0deg);
             }
             100% {
             -webkit-transform: rotate(360deg);
             transform: rotate(360deg);
             }
             }
             .fa-rotate-90 {
             -webkit-transform: rotate(90deg);
             transform: rotate(90deg);
             }
             .fa-rotate-180 {
             -webkit-transform: rotate(180deg);
             transform: rotate(180deg);
             }
             .fa-rotate-270 {
             -webkit-transform: rotate(270deg);
             transform: rotate(270deg);
             }
             .fa-flip-horizontal {
             -webkit-transform: scale(-1, 1);
             transform: scale(-1, 1);
             }
             .fa-flip-vertical {
             -webkit-transform: scale(1, -1);
             transform: scale(1, -1);
             }
             .fa-flip-both,
             .fa-flip-horizontal.fa-flip-vertical {
             -webkit-transform: scale(-1, -1);
             transform: scale(-1, -1);
             }
             .fa-rotate-by {
             -webkit-transform: rotate(var(--fa-rotate-angle, none));
             transform: rotate(var(--fa-rotate-angle, none));
             }
             .fa-stack {
             display: inline-block;
             vertical-align: middle;
             height: 2em;
             position: relative;
             width: 2.5em;
             }
             .fa-stack-1x,
             .fa-stack-2x {
             bottom: 0;
             left: 0;
             margin: auto;
             position: absolute;
             right: 0;
             top: 0;
             z-index: var(--fa-stack-z-index, auto);
             }
             .svg-inline--fa.fa-stack-1x {
             height: 1em;
             width: 1.25em;
             }
             .svg-inline--fa.fa-stack-2x {
             height: 2em;
             width: 2.5em;
             }
             .fa-inverse {
             color: var(--fa-inverse, #fff);
             }
             .sr-only,
             .fa-sr-only {
             position: absolute;
             width: 1px;
             height: 1px;
             padding: 0;
             margin: -1px;
             overflow: hidden;
             clip: rect(0, 0, 0, 0);
             white-space: nowrap;
             border-width: 0;
             }
             .sr-only-focusable:not(:focus),
             .fa-sr-only-focusable:not(:focus) {
             position: absolute;
             width: 1px;
             height: 1px;
             padding: 0;
             margin: -1px;
             overflow: hidden;
             clip: rect(0, 0, 0, 0);
             white-space: nowrap;
             border-width: 0;
             }
             .svg-inline--fa .fa-primary {
             fill: var(--fa-primary-color, currentColor);
             opacity: var(--fa-primary-opacity, 1);
             }
             .svg-inline--fa .fa-secondary {
             fill: var(--fa-secondary-color, currentColor);
             opacity: var(--fa-secondary-opacity, 0.4);
             }
             .svg-inline--fa.fa-swap-opacity .fa-primary {
             opacity: var(--fa-secondary-opacity, 0.4);
             }
             .svg-inline--fa.fa-swap-opacity .fa-secondary {
             opacity: var(--fa-primary-opacity, 1);
             }
             .svg-inline--fa mask .fa-primary,
             .svg-inline--fa mask .fa-secondary {
             fill: black;
             }
             .fad.fa-inverse,
             .fa-duotone.fa-inverse {
             color: var(--fa-inverse, #fff);
             }
          </style>
          <link id="favicon" rel="icon" href="favicon.png" sizes="32x32">
          <style>* {
             box-sizing: border-box;
             font-family: 'Urbanist', 'Roboto', sans-serif;
             }
             *, *:after, *:before {
             -webkit-box-sizing: border-box;
             -moz-box-sizing: border-box;
             box-sizing: border-box;
             }
             body{
             width: 100%;
             }
             html,body {
             margin:0;
             padding:0;
             }
             .body-apple{
             background-color: var(--roxo);
             }
             ._fixed {
             position: fixed;
             height: 100%;
             overflow-y: hidden;      
             width: 100%;
             }
             #container-loader {
             position: fixed;
             top: 0;
             left: 0;
             width: 100%;
             height: 100%;
             z-index: 1000;
             }
             #loader {
             display: block;
             position: relative;
             left: 50%;
             top: 50%;
             width: 140px;
             height: 140px;
             margin: -70px 0 0 -70px;
             border-radius: 50%;
             }
             .loader-componente{
             margin: 0px 0 15px -70px !important;
             }
             .loader-linha{
             position: absolute;
             border-radius: 50%;
             border: 3px solid transparent;
             border-top-color: var(--line-color);
             transition : border 600ms ease-out;
             }
             .loader-linha1 {
             top: 0px;
             left: 0px;
             right: 0px;
             bottom: 0px;
             animation: spin-loader 1.8s linear infinite;
             border-top-color: #850AD6;
             }
             .loader-linha2 {
             top: 10px;
             left: 10px;
             right: 10px;
             bottom: 10px;
             animation: spin-loader 2s linear infinite;
             animation-direction: reverse;
             border-top-color: #00C2E0;
             }
             .loader-linha3 {
             top: 20px;
             left: 20px;
             right: 20px;
             bottom: 20px;
             animation: spin-loader 1.5s linear infinite;
             border-top-color: #850AD6
             }
             .loader-linha4 {
             top: 30px;
             left: 30px;
             right: 30px;
             bottom: 30px;
             animation: spin-loader 1.2s linear infinite;
             animation-direction: reverse;
             border-top-color: #00C2E0;
             }
             @keyframes spin-loader {
             0%   { 
             -webkit-transform: rotate(0deg);
             -ms-transform: rotate(0deg); 
             transform: rotate(0deg);
             }
             100% {
             -webkit-transform: rotate(360deg);
             -ms-transform: rotate(360deg); 
             transform: rotate(360deg); 
             }
             }
          </style>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;900&amp;family=Urbanist:wght@100;400;500;600;700;800&amp;display=swap" rel="stylesheet">
      <link id="favicon" rel="icon" href="favicon.png" sizes="32x32">
      <link href="css/app.b1d4cee7.css" rel="preload" as="style">
      <link href="css/chunk-vendors.9eea24df.css" rel="preload" as="style">
      <link href="js/app.c03ca4d8.js" rel="preload" as="script">
      <link href="js/chunk-vendors.d558ae8b.js" rel="preload" as="script">
      <link href="css/chunk-vendors.9eea24df.css" rel="stylesheet">
      <link href="css/app.b1d4cee7.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/35.209a583f.css">
      <script charset="utf-8" src="js/35.62b38db5.js"></script>
      <link rel="stylesheet" type="text/css" href="css/37.3464abd6.css">
      <script charset="utf-8" src="js/37.3eb16bbc.js"></script><script charset="utf-8" src="js/49.08313f20.js"></script>
      <link rel="stylesheet" type="text/css" href="css/38.eabab94f.css">
      <script charset="utf-8" src="js/38.795a75d5.js"></script>
      <link rel="stylesheet" type="text/css" href="css/29.ec906903.css">
      <script charset="utf-8" src="js/29.c17a18bc.js"></script>
</head>
<body>
@include('layouts.menu')

{{-- <main class="p-5">
    {{ $slot }}
</main> --}}

<!-- Toast -->
{{-- <div
    x-data="toast"
    x-show="visible"
    x-transition
    x-cloak
    @notify.window="show($event.detail.message, $event.detail.type || 'success')"
    class="fixed w-[400px] left-1/2 -ml-[200px] top-16 py-2 px-4 pb-4 text-white"
    :class="type === 'success' ? 'bg-emerald-500' : 'bg-red-500'"
>
    <div class="font-semibold" x-text="message"></div>
    <button
        @click="close"
        class="absolute flex items-center justify-center right-2 top-2 w-[30px] h-[30px] rounded-full hover:bg-black/10 transition-colors"
    >
        <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-6 w-6"
            fill="none"
            viewBox="0 0 24 24"
            stroke="currentColor"
            stroke-width="2"
        >
            <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M6 18L18 6M6 6l12 12"
            />
        </svg>
    </button>
    <!-- Progress -->
    <div>
        <div
            class="absolute left-0 bottom-0 right-0 h-[6px] bg-black/10"
            :style="{'width': `${percent}%`}"
        ></div>
    </div>
</div> --}}
<!--/ Toast -->
<script src="js/chunk-vendors.d558ae8b.js"></script>
<script src="/js/app.c03ca4d8.js"></script>
<script type="text/javascript" id="" src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-load-image/2.6.1/load-image.all.min.js"></script>
</body>
</html>
