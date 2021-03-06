<nav class="cheatsheet-entries cheatsheet-panel">
  <header class="cheatsheet-entries-header cheatsheet-panel-header">
    <button data-show="menu">
      <svg viewBox="0 0 12 12" width="12" height="12"><title>menu 8</title><g fill="#111111"><path d="M11,9H1a1,1,0,0,0,0,2H11a1,1,0,0,0,0-2Z" fill="#111111"></path> <path d="M11,1H1A1,1,0,0,0,1,3H11a1,1,0,0,0,0-2Z" fill="#111111"></path> <path d="M11,5H1A1,1,0,0,0,1,7H11a1,1,0,0,0,0-2Z" data-color="color-2"></path></g></svg>
      Menu
    </button>
    <button data-show="main">
      <svg viewBox="0 0 12 12" width="12" height="12"><title>e remove</title><g fill="#111111"><path d="M10.707,1.293a1,1,0,0,0-1.414,0L6,4.586,2.707,1.293A1,1,0,0,0,1.293,2.707L4.586,6,1.293,9.293a1,1,0,1,0,1.414,1.414L6,7.414l3.293,3.293a1,1,0,0,0,1.414-1.414L7.414,6l3.293-3.293A1,1,0,0,0,10.707,1.293Z" fill="#111111"></path></g></svg>
      Close
    </button>
  </header>
  <div class="cheatsheet-entries-scrollarea cheatsheet-panel-scrollarea">
    <ul>
      <?php foreach ($entries as $entry): ?>
      <li>
        <a data-slug="<?= $entry->slug() ?>" data-title="<?= $entry->title() ?>" href="<?= $entry->url() ?>"<?php e($entry->isActive(), ' aria-current="page"' ) ?>>
          <?php if ($entry->icon()->isNotEmpty()): ?>
          <figure class="cheatsheet-entry-icon">
            <svg>
              <use xlink:href="#<?= $entry->icon() ?>" />
            </svg>
          </figure>
          <?php endif ?>
          <span>
            <strong><?= $entry->title() ?> <span><?= $entry->info() ?></span></strong>
            <small><?= $entry->excerpt()->kt() ?></small>
          </span>
        </a>
      </li>
      <?php endforeach ?>
    </ul>
  </div>
</nav>
