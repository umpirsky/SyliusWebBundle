/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

//; here is caused of twitter bootstrap do not have ; at the end of file
;(function ( $ ) {
    $(document).ready(function() {
        $('a[data-collection-button="add"]').on('click', function (e) {
            e.preventDefault();
            var collectionContainer = $('#' + $(this).data('collection'));
            var prototype = $('#' + $(this).data('prototype')).data('prototype');
            var item = prototype.replace(/__name__/g, collectionContainer.children().length);
            collectionContainer.append(item);
        });
    });
})( jQuery );
