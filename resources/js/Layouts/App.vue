<template>
      <header class="header header--desktop header--one header--fixed header--transparent" data-sticky="true">
        <div class="container">
            <div class="header__wrapper">
                <!-- <div class="header__left">
                    <div class="header__logo"><a class="ps-logo light" href="index.html"><img src="img/logo-white.png" alt="" /></a><a class="ps-logo" href="index.html"><img src="img/logo.png" alt="" /></a>
                    </div>
                    <ul class="menu menu--desktop">
                        <li class="menu-item-has-children has-mega-menu"><a href="properties.html">Properties</a><span class="sub-toggle"></span> 
                        </li>
                        <li class="menu-item-has-children"><a href="blog-grid.html">Blog</a><span class="sub-toggle"></span>
                        </li>
                        <li><a href="agents.html">Agents</a>
                        </li>
                        <li><a href="profile.html">My Account</a>
                        </li>
                    </ul>
                </div> -->
                <div class="header__left">
                    <div class="header__logo">
                        <router-link class="ps-logo light" :to="{name:'HomePage' }"><img src="img/logo-white.png" alt="" /></router-link>
                        <router-link class="ps-logo" :to="{name:'HomePage' }"><img src="img/logo.png" alt="" /></router-link>
                    </div>
                    <!-- <div class="header__logo"><a class="ps-logo light" href="index.html"><img src="img/logo-white.png" alt="" /></a><a class="ps-logo" href="index.html"><img src="img/logo.png" alt="" /></a>
                    </div> -->
                    <ul class="menu menu--desktop">
                        <router-link class="menu-item-has-children has-mega-menu" :to="{name:'Properties.index' }"><a href="properties.html">Properties</a><span class="sub-toggle"></span> 
                        </router-link>
                        <!-- <li class="menu-item-has-children has-mega-menu"><a href="properties.html">Properties</a><span class="sub-toggle"></span> 
                        </li> -->
                        <li class="menu-item-has-children"><a href="blog-grid.html">Blog</a><span class="sub-toggle"></span>
                        </li>
                        <!-- <li><a href="agents.html">Agents</a>
                        </li> -->
                        <router-link class="menu-item-has-children has-mega-menu" :to="{name:'Agents.index' }"><a href="">Agents</a><span class="sub-toggle"></span> 
                        </router-link>
                        <li><a href="profile.html">My Account</a>
                        </li>
                    </ul>
                </div>
                <div class="header__right">
                    <div class="header__actions">
                        <div class="header__account"><a href="signin.html"><i class="lnil lnil-user"></i>Log In</a></div>
                        <div class="header__submit-listing">
                            <button class="ps-btn ps-btn--with-opacity">Submit Listing<i class="lnil lnil-arrow-top-right"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="header header--mobile" data-sticky="true">
        <div class="header__left">
            <div class="header__logo"><a class="ps-logo" href="index.html"><img src="img/logo.png" alt="" /></a>
            </div>
        </div>
        <div class="header__right"><a class="header__menu-toggle ps-toggle-drawer" href="#" data-target="drawer-menu"><i class="lnil lnil-menu"></i></a></div>
    </header>
    <!-- <home-page></home-page> -->
    <router-view></router-view>
    <!-- Plugins-->
</template>

<script>
    import HomePage from '../components/HomePage.vue';

    
    export default {
       


        components: {
           HomePage
        },

        
    }
</script>