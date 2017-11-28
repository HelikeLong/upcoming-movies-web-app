<script src="<?=BASE_URL?>public/js/jquery.simplePagination.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.pagination-centered').pagination({
            items: <?=$itemCount?>,
            itemsOnPage: 20,
            displayedPages: 3,
            edges: 3,
            prevText: '< Prev',
            nextText: 'Next >',
            hrefTextPrefix: '<?=$paginationPath?>',
            currentPage: <?=$page?>,
            onPageClick: function (pageNumber, event) {
                window.location.href = '<?=$paginationPath?>' + pageNumber;
            }
        });
    });
</script>
