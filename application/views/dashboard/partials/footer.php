  <footer>

    <script>
      window.addEventListener("load", function() {
        document.getElementById("loading").style.display = "none";
        document.getElementById("main").style.display = "block";
      });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.4/index.global.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <script src="<?= base_url('/') ?>assets/js/initTheme.js"></script>
    <script src="<?= base_url('/') ?>assets/js/bootstrap.js"></script>
    <script src="<?= base_url('/') ?>assets/js/app.js"></script>
    <script src="<?= base_url('/') ?>assets/extensions/chart.js/chart.min.js"></script>
    <script src="<?= base_url('/') ?>assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
    <script src="<?= base_url('/') ?>assets/js/pages/simple-datatables.js"></script>
    <script src="<?= base_url('/') ?>assets/js/pages/ui-chartjs.js"></script>

    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          themeSystem: 'bootstrap5',
          headerToolbar: {
            left: 'prev,next',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,dayGridDay,listWeek',
          },
          buttonText: {
            today: 'Hari ini',
            month: 'Bulan',
            week: 'Minggu',
            day: 'Hari',
            list: 'Semua',
          },
          locale: 'id',
          events: [

            <?php foreach ($ruangan as $data) : ?>
              {
                title: '<?= $data->ruangan . "-" . $data->kegiatan ?>',
                start: '<?= $data->tgl_mulai ?>',
                end: '<?= $data->tgl_selesai ?>',
              },
            <?php endforeach; ?>
          ],

          selectOverlap: function(event) {
            return event.rendering === 'background';
          }

        });

        calendar.render();
      });
    </script>

    <script>
      document.title = '<?= addslashes($judul) ?>';

      if (document.title === 'Dashboard') {
        document.getElementById('dashboard').classList.add('active');
        document.getElementById('anggota').classList.remove('active');
      } else if (document.title === 'Anggota') {
        document.getElementById('list_anggota').classList.add('active');
        document.getElementById('anggota').classList.add('active');
        document.getElementById('dashboard').classList.remove('active');
      } else if (document.title === 'Divisi') {
        document.getElementById('divisi_anggota').classList.add('active');
        document.getElementById('anggota').classList.add('active');
        document.getElementById('dashboard').classList.remove('active');
      } else if (document.title === 'Program Kerja') {
        document.getElementById('program_kerja').classList.add('active');
        document.getElementById('anggota').classList.add('active');
        document.getElementById('dashboard').classList.remove('active');
      } else if (document.title === 'Events') {
        document.getElementById('events').classList.add('active');
        document.getElementById('anggota').classList.remove('active');
        document.getElementById('dashboard').classList.remove('active');
      } else if (document.title === 'Aspirasi') {
        document.getElementById('aspirasi').classList.add('active');
        document.getElementById('anggota').classList.remove('active');
        document.getElementById('dashboard').classList.remove('active');
      } else if (document.title === 'Pengaturan') {
        document.getElementById('pengaturan').classList.add('active');
        document.getElementById('anggota').classList.remove('active');
        document.getElementById('dashboard').classList.remove('active');
      } else if (document.title === 'Pengguna') {
        document.getElementById('pengguna').classList.add('active');
        document.getElementById('anggota').classList.remove('active');
        document.getElementById('dashboard').classList.remove('active');
      }
    </script>


    <script>
      $('.editAcara').on('click', function() {
        const id = $(this).data('id');

        $.ajax({
          url: '<?= base_url('admin/event/getAcara') ?>',
          data: {
            id: id
          },
          method: 'post',
          dataType: 'json',
          success: function(data) {
            $('#acara').val(data.acara);
            $('#waktu').val(data.waktu);
            $('#lokasi').val(data.lokasi);
            $('#biaya').val(data.biaya);
            $('#pendaftaran').val(data.pendaftaran);
            $('#deskripsi').val(data.deskripsi);
            $('#id').val(data.id);
          }
        });
      });
    </script>
  </footer>

  </html>