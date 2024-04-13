import "./app.js";/* empty css            */const e = `
  <div class="flex flex-col gap-4">
    <div class="alert alert-success" role="alert" id="controlled-alert">
      <i width="1em" height="1em" data-feather="check-circle"></i>
      <p>This is a success alert with addtional information and content.</p>
    </div> 
    <div>
      <button class="btn btn-primary" type="button" id="btn-hide-alert">
        Hide dismissable alert
      </button>
    </div>
  </div>

  <script>
    const btnHideAlert = document.querySelector('#btn-hide-alert');

    btnHideAlert.addEventListener('click', () => {
      createDismissableAlert('#controlled-alert').dismiss();
    })
  <\/script>
`, t = createCodeViewer("#controlled-alert-code-viewer", e); t.render(); const r = document.querySelector("#btn-hide-alert"); r.addEventListener("click", () => { createDismissableAlert("#controlled-alert").dismiss() });
