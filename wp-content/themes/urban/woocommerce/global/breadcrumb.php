
<?php


if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<div class="breadcrumb-area bg-gray">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <ul>
                <li>
<?php
if ( ! empty( $breadcrumb ) ) {

    echo $wrap_before;

    foreach ( $breadcrumb as $key => $crumb ) {

        echo $before;

        if ( ! empty( $crumb[1] ) && sizeof( $breadcrumb ) !== $key + 1 ) {
            echo '<a href="' . esc_url( $crumb[1] ) . '">' . esc_html( $crumb[0] ) . '</a>';
        } else {
            echo esc_html( $crumb[0] );
        }

        echo $after;

        if ( sizeof( $breadcrumb ) !== $key + 1 ) {
            echo $delimiter;
        }
    }

    echo $wrap_after;

}
?>



                </li>
            </ul>
        </div>
    </div>
</div>

