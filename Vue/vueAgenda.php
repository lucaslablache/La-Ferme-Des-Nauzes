<!-- load calendar test -->
<script src="https://uicdn.toast.com/tui.code-snippet/v1.5.2/tui-code-snippet.min.js"></script>
<script src="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.min.js"></script>
<script src="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.min.js"></script>
<script src="https://uicdn.toast.com/tui-calendar/latest/tui-calendar.js"></script>
<link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui-calendar/latest/tui-calendar.css">
<link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.css">
<link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.css">
<script src="/Assets/js/calendar.js"></script>
Agenda
<div id="menu">
    <span id="menu-navi">
        <button type="button" id="move-today" class="btn btn-default btn-sm move-today" data-action="move-today">Aujourd'hui</button>
        <button type="button" id="move-prev" class="btn btn-default btn-sm move-day" data-action="move-prev">
          <i class="calendar-icon fas fa-chevron-left" data-action="move-prev"></i>
        </button>
        <button type="button" id="move-next" class="btn btn-default btn-sm move-day" data-action="move-next">
          <i class="calendar-icon fas fa-chevron-right" data-action="move-next"></i>
        </button>
    </span>
</div>

<div id="calendar"></div>


<ul id="calendar-data" class="d-none">
  <?php foreach ($agendaEvents as $agendaEvent):?>
  <li 
      date="<?= $agendaEvent['date'] ?>"
      hStart="<?= $agendaEvent['heure_debut'] ?>"
      hEnd="<?= $agendaEvent['heure_fin'] ?>"
      location="<?= $agendaEvent['adresse'] ?>"
      info="<?= $agendaEvent['information'] ?>"
      >
  </li>
  <?php endforeach; ?>
</ul>
  