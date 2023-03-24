<template>
     <div class="ps-page--inner" id="agents">
        <div class="container">
            <div class="ps-page__header">
                <form class="ps-form--agent-search" action="https://nouthemes.net/html/finderland/index.html" method="get">
                    <div class="row">
                        <div class="col-md-5 col-12">
                            <div class="ps-form underline">
                                <input class="form-control" type="text" placeholder=" " />
                                <label>Enter agent name...</label>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="ps-form select underline">
                                        <select class="form-control">
                                            <option>Chicago</option>
                                            <option>New Jork</option>
                                            <option>London</option>
                                        </select><i class="lnil lnil-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="ps-form select underline">
                                        <select class="form-control">
                                            <option>All Categories</option>
                                            <option>For Rent</option>
                                            <option>For Sell</option>
                                        </select><i class="lnil lnil-chevron-down"></i>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="ps-form__submit">
                                        <button class="ps-btn">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <h1 class="ps-page__heading">Agents List</h1>
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="agents.html">Agents</a></li>
                    <li>Agent Listing</li>
                </ul>
            </div>
        </div>
        <div class="ps-page__content">
            <div class="container">
                <div class="ps-agents">
                    <div class="ps-section__top">
                        <p><strong>140</strong> Agents Found</p>
                    </div>
                    <div class="ps-section__content">
                        <div  class="ps-section__items ps-grid" data-columns="5">
                            <div v-for="agent in agents.data" class="ps-grid__column">
                                <div class="ps-block--agent">
                                    <div class="ps-block__thumbnail">
                                        <div class="ps-block__image"><img src="img/agents/1.jpg" alt="" /></div><a class="ps-block__overlay" href="agent-detail.html"><span>TR</span></a>
                                    </div>
                                    <div class="ps-block__content"><a class="ps-block__name" href="agent-detail.html">{{agent.full_name }}</a>
                                        <p class="ps-block__position">Company agent at<a href="#">{{ agent.agent_company }}</a></p>
                                        <div class="ps-block__meta">
                                            <p><a href="#"> <span class="__cf_email__" data-cfemail="b3c7dcd1d1caf3d5daddd7d6c1dfd2ddd79dd0dcde">[email&#160;protected]</span></a><br/>{{ agent.phone_number }}</p>
                                        </div>
                                        <div class="ps-block__social">
                                            <div class="ps-social-links"><a href="#"><i class="lnir lnir-twitter-filled"></i></a><a href="#"><i class="lnir lnir-facebook-filled"></i></a><a href="#"><i class="lnir lnir-google"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                    <div class="ps-section__bottom">
                        <Bootstrap4Pagination class="ps-pagination" :data="agents"  @pagination-change-page="getAgents" />
                    </div>
                </div>
            </div>
        </div>
    </div>





    <footer-page></footer-page>
</template>


<script>
import FooterPage from '../FooterPage.vue';
import useAgents from '../../composables/agents.js';
import { Bootstrap4Pagination } from 'laravel-vue-pagination';
import { onMounted } from 'vue';


export default{ 
        setup () {
            const { agents, getAgents } = useAgents()
    
            onMounted(getAgents)
    
            return {agents, getAgents}
        },

        components: {
            FooterPage, 
            Bootstrap4Pagination


        }
     }

</script>

<style>
#agents .ps-agents {
  padding-bottom: var(--section-padding-bottom);
}

#agents .ps-page__header .ps-form--agent-search {
  margin-bottom: 50px;
  margin-top: 100px;
}

#agents .ps-agent-information {
  padding-bottom: var(--section-padding-bottom);
}

#agents .ps-agent-properties {
  margin-bottom: 50px;
}

#agents .ps-layout--with-sidebar {
  padding-bottom: var(--section-padding-bottom);
}

@media screen and (min-width: 1024px) {
  #agents .ps-page__header .ps-form--agent-search {
    margin-bottom: 70px;
  }
  #agents .ps-agent-properties {
    margin-bottom: 80px;
  }
}

</style>