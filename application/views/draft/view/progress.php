<hr class="my-5">
  <!-- .card -->
  <section id="progress" class="card">
    <!-- .card-header -->
    <header class="card-header">Progress Step</header>
    <!-- .card-body -->
    <div class="card-body">
      <!-- .progress-list -->
        <ol class="progress-list mb-0 mb-sm-4">
        	<!-- REVIEW -->
          <li class="
          <?=($input->is_review == 'n' and $input->draft_status == 99) ? 'error' : '';?>
          <?=($input->is_review == 'y') ? 'success' : '';?>
          <?=($reviewers) ? 'active' : '';?>
          ">
            <button type="button" data-toggle="tooltip"  title="
            <?php if ($input->is_review == 'n' and $input->draft_status == 99) {
    echo 'Ditolak';
} elseif ($input->is_review == 'y') {
    echo 'Selesai';
} elseif (format_datetime($input->review_start_date) != '-') {
    echo 'Progress';
} else {
    echo 'Belum Mulai';
}?>">
              <!-- progress indicator -->
              <span width="300px" class="progress-indicator"></span>
            </button>
            <span class="progress-label d-none d-sm-inline-block">Review</span>
          </li>
          <!-- EDIT -->
          <li class="
          <?=($input->is_review == 'y' and $input->is_edit == 'n' and $input->draft_status == 99) ? 'error' : '';?>
          <?=($input->is_edit == 'y') ? 'success' : '';?>
          <?=($input->is_review == 'y') ? 'active' : '';?>
          ">
            <button type="button" data-toggle="tooltip" title="
            <?php if ($input->is_edit == 'n' and $input->draft_status == 99) {
    echo 'Ditolak';
} elseif ($input->is_edit == 'y') {
    echo 'Selesai';
} elseif (format_datetime($input->edit_start_date) != '-') {
    echo 'Progress';
} else {
    echo 'Belum Mulai';
}?>">
              <!-- progress indicator -->
              <span class="progress-indicator"></span>
            </button>
            <span class="progress-label d-none d-sm-inline-block">Edit</span>
          </li>
          <!-- LAYOUT -->
          <li class="
          <?=($input->is_edit == 'y' and $input->is_layout == 'n' and $input->draft_status == 99) ? 'error' : '';?>
          <?=($input->is_layout == 'y') ? 'success' : '';?>
          <?=($input->is_edit == 'y') ? 'active' : '';?>
          ">
            <button type="button" data-toggle="tooltip" title="
            <?php if ($input->is_layout == 'n' and $input->draft_status == 99) {
    echo 'Ditolak';
} elseif ($input->is_layout == 'y') {
    echo 'Selesai';
} elseif (format_datetime($input->layout_start_date) != '-') {
    echo 'Progress';
} else {
    echo 'Belum Mulai';
}?>">
              <!-- progress indicator -->
              <span class="progress-indicator"></span>
            </button>
            <span class="progress-label d-none d-sm-inline-block">Layout</span>
          </li>
          <!-- PROOFREAD -->
          <li class="
          <?=($input->is_layout == 'y' and $input->is_proofread == 'n' and $input->draft_status == 99) ? 'error' : '';?>
          <?=($input->is_proofread == 'y') ? 'success' : '';?>
          <?=($input->is_layout == 'y') ? 'active' : '';?>
          ">

          <?php if ($input->is_layout == 'y' and ($revision_total['editor'] != 0 or $revision_total['layouter'] != 0)) {
    $warna        = 'style="border-color: #ffc107"';
    $tebal_kuning = 'font-weight-bold text-warning';
    $teks         = '';
} else {
    $warna        = '';
    $tebal_kuning = '';
}?>
            <button <?=$warna;?> data-html="true" type="button" data-toggle="tooltip" title="
            <?php if ($input->is_proofread == 'n' and $input->draft_status == 99) {
    echo 'Ditolak';
} elseif ($input->is_proofread == 'y') {
    echo 'Selesai';
} elseif ($revision_total['editor'] != 0 or $revision_total['layouter'] != 0) {
    echo 'Revisi Edit = ' . $revision_total['editor'] . '<br>' . 'Revisi Layout = ' . $revision_total['layouter'];
} elseif (format_datetime($input->proofread_start_date) != '-') {
    echo 'Progress';
} else {
    echo 'Belum Mulai';
}?>">
              <!-- progress indicator -->
              <span class="progress-indicator"></span>
            </button>
            <span class="progress-label d-none d-sm-inline-block <?=$tebal_kuning;?> ">Proofread</span>
          </li>
          <!-- CETAK -->
          <li class="
          <?=($input->is_proofread == 'y' and $input->is_print == 'n' and $input->draft_status == 99) ? 'error' : '';?>
          <?=($input->is_print == 'y') ? 'success' : '';?>
          <?=($input->is_proofread == 'y') ? 'active' : '';?>
          ">
            <button type="button" data-toggle="tooltip" title="
            <?php if ($input->is_print == 'n' and $input->draft_status == 99) {
    echo 'Ditolak';
} elseif ($input->is_print == 'y') {
    echo 'Selesai';
} elseif (format_datetime($input->print_start_date) != '-') {
    echo 'Progress';
} else {
    echo 'Belum Mulai';
}?>">
              <!-- progress indicator -->
              <span class="progress-indicator"></span>
            </button>
            <span class="progress-label d-none d-sm-inline-block">Cetak</span>
          </li>
          <!-- FINAL -->
          <li class="
          <?=($input->is_review == 'y' and $input->is_edit == 'y' and $input->is_layout == 'y' and $input->is_proofread == 'y' and $input->is_print == 'y' and $input->draft_status == 99) ? 'error' : '';?>
          <?=($input->draft_status == 14) ? 'success' : '';?>
          <?=($input->is_print == 'y') ? 'active' : '';?>
          ">
            <button type="button" data-toggle="tooltip" title="
            <?php if ($input->is_review == 'y' and $input->is_edit == 'y' and $input->is_layout == 'y' and $input->is_proofread == 'y' and $input->draft_status == 99) {
    echo 'Ditolak';
} elseif ($input->draft_status == 14) {
    echo 'Selesai';
} elseif (format_datetime($input->print_end_date) != '-') {
    echo 'Progress';
} else {
    echo 'Belum Mulai';
}?>">
              <!-- progress indicator -->
              <span class="progress-indicator"></span>
            </button>
            <span class="progress-label d-none d-sm-inline-block">Final</span>
          </li>
        </ol>
        <!-- /.progress-list -->
    </div>
    <!-- /.card-body -->
  </section>
  <!-- /.card -->