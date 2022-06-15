function charExample() {
    $.get( "input.txt", function ( data ) {
        $( '#dm' ).text( data );
    } );
}

$( window ).ready( function () {
    $( '#nav' ).fadeTo( 1500, 0, function () {
        $( '#nav' ).fadeIn( 1500 );
    } )
} );