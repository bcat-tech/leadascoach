/**
 * AllPage
 * @type {{init: AllPage.init}}
 */
const AllPage = function () {


    /**
     * Plugin
     */
    const pluginStart = function () {


	}

    /**
     * Header
     */
    const Header = function () {

        /**
         * Navbar Menu
         */
        $(document).on('click', '.header__btnmenu', function(e) {
            e.preventDefault();

            $('body').toggleClass('menu__active');

        });

    }

    /**
     * Init
     */
	return {
		init: function () {
			pluginStart();
            Header();
		}
	};

}();

/**
 * AllPage
 * @type {{init: AllPage.init}}
 */
const HomePage = function () {

    /**
     * Slider
     * @constructor
     */
    const Slider = function () {



    }




    /**
     * Init
     */
    return {
        init: function () {
            Slider();
        }
    };

}();

/**
 * ready
 */
jQuery(document).ready(function() {
	AllPage.init();
    HomePage.init();
});



