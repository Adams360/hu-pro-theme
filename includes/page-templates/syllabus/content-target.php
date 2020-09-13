<section class="target">
<div class="container">

<div class="icon-box icon-box--horizontal">
<div class="icon-box__title">
    <h2 class="heading">
        Target Audience
    </h2>
</div>

<div class="icon-box__icon icon-box__icon--horizontal">
    <svg viewBox="0 0 62 62" width="3.5em" height="3.5em" class="svg-icon svg-icon--white">
        <g>
          <g>
            <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="1.5">
              <path stroke-miterlimit="10" d="M47.97 34.224a17.225 17.225 0 01-3.757 7.809"/>
              <path stroke-miterlimit="10" d="M34.347 13.906a17.315 17.315 0 0113.622 13.615"/>
              <path stroke-miterlimit="10" d="M14.031 27.527a17.315 17.315 0 0113.622-13.621"/>
              <path stroke-miterlimit="10" d="M17.793 42.033a17.244 17.244 0 01-3.757-7.809"/>
              <path stroke-miterlimit="10" d="M42.158 34.456a11.7 11.7 0 01-2.427 4.23" />
              <path stroke-miterlimit="10" d="M34.347 19.647a11.741 11.741 0 017.885 7.89" />
              <path stroke-miterlimit="10" d="M19.771 27.529a11.74 11.74 0 017.647-7.81" />
              <path stroke-miterlimit="10" d="M22.273 38.685a11.718 11.718 0 01-2.5-4.458" />
              <path stroke-miterlimit="10" d="M21.518 30.876H10.361" />
              <path stroke-miterlimit="10" d="M6.455 30.876H4.224" />
              <path stroke-miterlimit="10" d="M57.776 30.876h-2.231" />
              <path stroke-miterlimit="10" d="M51.641 30.876H40.484"/>
              <path stroke-miterlimit="10" d="M31 10.793V21.95" />
              <path stroke-miterlimit="10" d="M31 5.215v2.231" />
              <path stroke-linejoin="round" d="M25.422 47.611v8.925" />
              <path stroke-linejoin="round" d="M36.579 47.611v8.925" />
              <path stroke-linejoin="round" d="M41.041 56.537V46.495a5.663 5.663 0 00-5.578-5.578h-8.925a5.664 5.664 0 00-5.579 5.578v10.042" />
              <path stroke-miterlimit="10" d="M36.574 30.929a5.576 5.576 0 11-5.525-5.631 5.576 5.576 0 015.525 5.631z" data-name="Path 250"/>
            </g>
          </g>
        </g>
      </svg>
</div>
</div>

<?php 
  $bullets = get_field('target_audience_bullets');      
?>
<ul class="target__content">
<?php foreach($bullets as $bullet): ?>
    <?php if( !empty($bullet) ): ?>
<li>
    <span class="icon">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-check-circle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
          </svg>
    </span>
    <?= $bullet; ?>
</li>
<?php endif; ?>
<?php endforeach; ?>
</ul>


</div>

</section>