<?php
    $customers_logos   = get_field('customers_logos');
?>
<section class="customers">

<h2 class="heading">
    among our customers
</h2>

<?php if( $customers_logos ): ?>
<div class="customers__logos">
<?php foreach( $customers_logos as $customer_logo ): ?>
    <?php if( isset($customer_logo)  && !empty($customer_logo) ): ?>
    <div class="customers__logo">
        <img src="<?= $customer_logo; ?>" alt="">
    </div>
    <?php endif; ?>
    <?php endforeach; ?>
</div>
<?php endif; ?>
</section>