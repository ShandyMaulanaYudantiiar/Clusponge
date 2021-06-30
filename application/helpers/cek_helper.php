<?php
function belumlogin()
{
  $cek = get_instance();
  if (!$cek->session->userdata('EMAIL')) {
    redirect('admin/Auth');
  }
}