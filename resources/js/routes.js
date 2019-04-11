import Home from './components/Home';
import About from './components/About';
import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Mascot from './components/Mascot';
import Illustrations from './components/Illustrations';
import LoadersAndAnimations from './components/LoadersAndAnimations';
import Wallpapers from './components/Wallpapers';


export default {


    mode: 'history',

    linkActiveClass: 'font-bold',

    routes: [
        {

        path: '/',
        component: Home
    },
        {

            path: '/about',
            component: About
        },

        {

            path: '/logo',
            component: Logo
        },

        {

            path: '/logo-symbol',
            component: LogoSymbol
        },

        {

            path: '/colors',
            component: Colors
        },

        {

            path: '/typography',
            component: Typography
        },

        {

            path: '/mascot',
            component: Mascot
        },

        {

            path: '/illustrations',
            component: Illustrations
        },

        {

            path: '/loaders-and-animations',
            component: LoadersAndAnimations
        },

        {

            path: '/wallpapers',
            component: Wallpapers
        },



    ]
}