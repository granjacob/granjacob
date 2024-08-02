<div class="left-menu">
    <div class="menu-header">
        <svg width="100" height="100" xmlns="http://www.w3.org/2000/svg">
            <circle cx="50" cy="50" r="50" fill="#4A90E2" />
            <!-- Additional SVG elements can be added here for detail -->
        </svg>
    </div>
    <ul>
        <li><a href="<?php print getPageCurrent( "overview" ); ?>">Overview</a></li>
        <ul>
            <li><a href="<?php print getPageCurrent( "introduction" ); ?>">Introduction</a></li>
        </ul>
        <li><a href="<?php print getPageCurrent( "syntax-guide" ); ?>">Syntax Guide</a></li>
        <ul>
            <li><a href="<?php print getPageCurrent( "defining-entities" ); ?>">1. Defining Entities</a></li>
            <li><a href="<?php print getPageCurrent( "creating-foreign-keys" ); ?>">2. Creating Foreign Keys and Relationships</a></li>
            <li><a href="<?php print getPageCurrent( "using-wildcard-keywords" ); ?>">3. Using Wildcard Keywords</a></li>
            <ul>
                <li><a href="<?php print getPageCurrent( "using-anyentity" ); ?>">3.1 Using anyEntity</a></li>
                <li><a href="<?php print getPageCurrent( "using-anyattribute" ); ?>">3.2 Using anyAttribute</a></li>
            </ul>
        </ul>
    </ul>
</div>

<?php includePage( "wpcontent" ); ?>
