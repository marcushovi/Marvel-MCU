(function ( $ ) {

    var scrollZero = 0;
    var tline = $( '<div>', { id: 'tline' } ).prependTo( '#timeline' ); //div which scroll
    $( '<div>', { class: 'rect' } ).appendTo( '.rect-container' );
    $( '<div>', { class: 'rect2' } ).appendTo( '.rect-container' );
    $( '.intro2' ).animate( { opacity: 0 }, 0 );
    $( '.skills' ).animate( { opacity: 0 }, 0 );

    $( window ).scroll( function () {
        var scroll = $( window ).scrollTop(),   // It will return scroll value
            Htimeline = $( '#timeline' ).innerHeight(), //height of timeline
            Hjan = $( '#nav' ).innerHeight() + $( '#jumbo' ).innerHeight() + $( '#afterj' ).innerHeight();//heightof elements which is before

        if ( scroll > (Hjan - 300) ) {

            if ( scroll > (Hjan + Htimeline - tline.innerHeight()) )
                $( "#tline" ).css( "transform", 'translate(0px,' + (Hjan + Htimeline - tline.innerHeight()) + 'px)' );
            else
                $( "#tline" ).css( "transform", 'translate(0px,' + (scroll - Hjan + 300) + 'px)' );
        } else
            $( "#tline" ).css( "transform", 'translate(0px,0px)' );


        //if you scroll down so navbar slide up (and reverse)
        if ( $( window ).width() > 767 ) { //if width of browser > 767
            if ( scroll > 300 && scroll > scrollZero ) {
                $( "#nav" ).css( "transform", 'translateY(-100%)' );
            } else {
                $( "#nav" ).css( "transform", 'translateY(0px)' );
            }
            scrollZero = scroll;
        }

        var intro = $( '.info-box' ).innerHeight() + $( '.intro' ).innerHeight();
        // if zou scroll to skills element this if will be true
        if ( (intro - 100) < scroll ) {
            $( '.skills' ).animate( { opacity: 1 }, 1000 );
            var contRect = $( '.rect-container' );//var where is container of all rects
            for ( var i = 5; i >= 0; i-- ) {
                var x = contRect.eq( i ).find( '.size' ).text();//var where is the number
                contRect.eq( i ).find( '.rect2' ).css( {
                    "width": "" + (7 - x) * 10 + "%"
                } )
            }

        }

        if ( (intro + $( '.skills' ).innerHeight() - 100) < scroll ) {
            $( '.intro2' ).animate( {
                opacity: 1
            }, 1000 );
        }
    } );
    //main content padding-top 
    var heightNav = $( '#nav' ).height();
    $( '#content' ).css( "padding-top", heightNav - 5 + 'px' );
    //half jumbotron which is grey there is border
    var Htcont = $( '#jumbo' ).height();
    $( '#jh' ).css( {
        "border-top-width": Htcont + "px",
        "border-left-width": Htcont / 2.4 + "px",
        "border-right-width": Htcont / 1.2 + "px"
    } );

    $( window ).resize( function () {
        heightNav = $( '#nav' ).height();
        $( '#content' ).css( "padding-top", heightNav - 5 + 'px' );
        Htcont = $( '#jumbo' ).height();
        $( '#jh' ).css( {
            "border-top-width": Htcont + "px",
            "border-left-width": Htcont / 2.4 + "px",
            "border-right-width": Htcont / 1.2 + "px "
        } );
    } );
    //when you click on the "hamburger" background and height will change
    var overlay = $( '<div>', { id: 'overlay' } ).appendTo( 'body' ).hide();
    $( '.menu-toggle' ).click( function () {
        overlay.fadeToggle( 200 );
        $( '.menu-container' ).toggleClass( 'active' );
        $( '.line1' ).toggleClass( 'activel1' );
        $( '.line2' ).toggleClass( 'activel2' );
        $( '.line3' ).toggleClass( 'activel3' );
    } );
    //when the menu is open and you click out of menu so menu will close
    overlay.click( function () {
        overlay.fadeOut( 200 );
        $( '.menu-container' ).toggleClass( 'active' );
        $( '.line1' ).toggleClass( 'activel1' );
        $( '.line2' ).toggleClass( 'activel2' );
        $( '.line3' ).toggleClass( 'activel3' );
    } );
    //scroll btn 
    $( "#scr-btn" ).click( function ( event ) {
        $( 'html, body' ).animate( { scrollTop: 980 }, 800 );
    } );


    $( '.about-container' ).children( ':not(:first)' ).children().animate( {
        opacity: 0,
        transform: "translateY(0%)"
    }, 500 ).hide();

    $( '.choices' ).click( function () {
        $( '.choices' ).find( 'span' ).css( {
            "border-bottom-color": "transparent",
            "color": "#FFF"
        } );
        $( this ).find( 'span' ).css( {
            "border-bottom-color": "#FFF",
            "color": "#2E363F"
        } )
        var choice = "." + $( this ).attr( "id" );
        $( '.about-container' ).children( ':not(' + choice + ')' ).children().animate( {
            opacity: 0,
            transform: "translateY(0%)"
        }, 500 ).hide( 400 );

        $( choice ).prependTo( '.about-container' );

        $( choice ).children().show( 400 ).animate( {
            opacity: 1,
            transform: "translateY(-100%)"
        }, 500 );
    } );
})( jQuery );