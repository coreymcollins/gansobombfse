/**
 * File js-enabled.js
 *
 * If Javascript is enabled, replace the <body> class "no-js".
 */
window.onload = () => {
    if ( document.body.classList.contains( 'no-js' ) ) {
        document.body.classList.remove( 'no-js' );
        document.body.classList.add( 'js');
    } else {
        document.body.classList.add( 'js' );
    }
}
