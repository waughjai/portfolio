( function() {
    const getWindowWidth = () => window.innerWidth;
    const projectHeaders = document.getElementsByClassName( 'project-nom' );
    const projectSummaries = document.getElementsByClassName( 'project-summary-content' );

    const findMaxElementHeight = function( list ) {
        let max = 0;
        for ( let i = 0; i < list.length; ++i ) {
            const item = list[ i ];
            if ( item.clientHeight > max ) {
                max = item.clientHeight;
            }
        }
        return max;
    };

    const equalizeElementHeights = function( list ) {
        if ( list ) {
            const max = findMaxElementHeight( list );
            for ( let i = 0; i < list.length; ++i ) {
                const item = list[ i ];
                item.style.height = `${ max }px`;
            }
        }
    };

    const resetElementHeights = function( list ) {
        if ( list ) {
            for ( let i = 0; i < list.length; ++i ) {
                const item = list[ i ];
                item.style.height = 'auto';
            }
        }
    };

    const reset = function() {
        resetElementHeights( projectHeaders );
        resetElementHeights( projectSummaries );
    };

    const equalize = function() {
        reset();
        equalizeElementHeights( projectHeaders );
        equalizeElementHeights( projectSummaries );
    };

    const update = function() {
        if ( getWindowWidth() >= 1200 ) {
            equalize();
        }
        else {
            reset();
        }
    };

    update();
    window.addEventListener( 'resize', update );
})();