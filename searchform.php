<form role="search" method="get" action="<?= home_url('/search'); ?>">
  <div class="input-group">
      <input type="search" class="form-control" name="s" id="s" value="<?= get_search_query(); ?>" placeholder="Search for LOL...">
      <span class="input-group-btn">
        <button class="btn btn-secondary" type="submit">Go!</button>
      </span>
  </div>
</form>