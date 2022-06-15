(function ( $ ) {
    //when focus inputs
    $( '.inputClick' ).focus( function () {
        $( '.inputClick' ).css( {
            "background": "#FFF",
            "color": "#cb4335",
            "transform": "none",
            "box-shadow": "none"
        } )
        $( this ).css( {
            "background": "#cb4335",
            "color": "#FFF",
            "transform": "scale(1.06)",
            "box-shadow": "0px 3px 5px 1px rgba(0,0,0,0.5)"
        } );
    } );
    //when you hover aon submit button
    $( '#btn' ).hover(
        function () {
            $( this ).css( {
                "opacity": "1",
                "transform": "scale(1.06)",
                "box-shadow": "0px 6px 5px 1px rgba(0,0,0,0.5)"
            } )
        },
        function () {
            $( this ).css( {
                "opacity": ".9",
                "transform": "none",
                "box-shadow": "0px 3px 5px 1px rgba(0,0,0,0.5)"
            } )
        } );
    //when you click on submit button
    $( '#btn' ).click(
        function () {
            $( this ).css( {
                "box-shadow": " inset 0px 0px 5px 3px rgba(0,0,0,0.5)"
            } )
        } );
})( jQuery );