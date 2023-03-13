<template>
    <nav class="navigation--bottom">
        <div class="navigation__wrapper">
            <div class="navigation__item"><a class="active" href="index.html"><i class="lnil lnil-home"></i></a></div>
            <div class="navigation__item"><a class="ps-toggle-drawer" href="#" data-target="drawer-menu"><i class="lnil lnil-menu"></i></a></div>
            <div class="navigation__item"><a class="ps-search-open" href="search.html"><i class="lnil lnil-search-alt"></i></a></div>
            <div class="navigation__item"><a href="signin.html"><i class="lnil lnil-user-alt"></i></a></div>
        </div>
    </nav>
</template>



<style>
    .navigation--bottom {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: #fff;
    border-top: 1px solid var(--color-border);
    z-index: 999;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    }

    .navigation--bottom .navigation__item {
    justify-self: center;
    align-self: center;
    }

    .navigation--bottom .navigation__item a {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 36px;
    height: 36px;
    border-radius: var(--border-radius-medium);
    }

    .navigation--bottom .navigation__item a.active {
    background-color: hsla(var(--color-1st-h), var(--color-1st-s), var(--color-1st-l), 0.1);
    }

    .navigation--bottom .navigation__wrapper {
    max-width: 300px;
    margin: 0 auto;
    display: grid;
    width: 100%;
    grid-template-columns: repeat(4, 1fr);
    }

    @media screen and (min-width: 1024px) {
    .navigation--bottom {
        display: none;
    }
    }

</style>