import Detail from './components/Detail';
import Home from './components/Home';
import Login from './components/Login';
import Register from './components/Register';
import AdminUser from './components/AdminUser';


export const routes = [

    {
        path:'/detail',
        component:Detail
    },
    {
        path:'/home',
        name:'home',
        component:Home
    },
    {
        path:'/login',
        component:Login
    },
    {
        path:'/register',
        component:Register
    },
    {
        path:'/adminUser',
        name:'adminUser',
        component:AdminUser
    }
]
// const routers = new Router({
//     mode:'history',
//     router:router
// })

