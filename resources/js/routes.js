import VueRouter from 'vue-router';
import HomePage from './components/pages/HomePage';
import ForumPage from './components/pages/ForumPage';
import TopicPage from './components/pages/TopicPage';
import TopicDetail from './components/pages/TopicDetail';
import NewTopic from './components/pages/NewTopic';
import UserProfile from './components/pages/UserProfile';
import New from './components/pages/New.vue';
import NewDetail from './components/pages/NewDetail.vue';
import Product from './components/pages/Classifieds.vue';
import ProductDetail from './components/pages/ClassifiedsDetail.vue';
import NewClass from './components/pages/NewClass.vue';



export const routes = [
    { path: '/home', component: HomePage},
    { path: '/forum', component: ForumPage},
    { path: '/forum/topic/:category_id', name: 'forum/topic', component: TopicPage},
    { path: '/forum/detail/:topic_id',name: 'forum/detail', component: TopicDetail},
    { path: '/forum/userprofile', name: 'forum/userprofile', component: UserProfile },
    { path: '/new-topic', component: NewTopic},
    {path: '/new', component: New},
    {path: '/forum/newdetail/:news_id',name:'forum/newdetail', component: NewDetail},
    {path: '/product', component:Product},
    {path: '/forum/productdetail/:id_classifieds', name:'forum/productdetail' ,component:ProductDetail},
    {path: '/newclass', component: NewClass},
]

export default new VueRouter(
    {
        mode: 'history',
        routes: routes
    }
)
