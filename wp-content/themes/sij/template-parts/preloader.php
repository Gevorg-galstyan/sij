<style>
body.blur #site-header,
body.blur #site-content,
body.blur #site-footer {
    filter: blur(3px);
}

.preloader {
    background: #374a33eb;
    z-index: 999;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
}

.cssload-loader {
    display: block;
    margin: 0 auto;
    width: 30px;
    height: 30px;
    position: relative;
    border: 3px solid #599c4d;
    animation: cssload-loader 1.7s infinite ease;
}

.cssload-loader-inner {
    vertical-align: top;
    display: inline-block;
    width: 100%;
    background-color: #599c4d;
    animation: cssload-loader-inner 1.7s infinite ease-in;
}





@keyframes cssload-loader {
    0% {
        transform: rotate(0deg);
    }

    25% {
        transform: rotate(180deg);
    }

    50% {
        transform: rotate(180deg);
    }

    75% {
        transform: rotate(360deg);
    }

    100% {
        transform: rotate(360deg);
    }
}

@keyframes cssload-loader-inner {
    0% {
        height: 0%;
    }

    25% {
        height: 0%;
    }

    50% {
        height: 100%;
    }

    75% {
        height: 100%;
    }

    100% {
        height: 0%;
    }
}

body.loaded .preloader {
    display: none;
}
</style>
<div class="preloader">
    <span class="cssload-loader">
        <span class="cssload-loader-inner"></span>
    </span>
</div>