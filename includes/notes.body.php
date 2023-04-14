
<button id="notes-btn" class="btn btn-rounded btn-icon" onclick="toggleElement()">
<i id="btn_icon" class="fa-regular fa-comment"></i>
</button>
     

<div class="notes-popup shadow mb-5 bg-white" id="myNotes" style="display: none">
  <form class="form-container"">
    <div
      class="card-header d-flex justify-content-between align-items-center bg-info text-white border-bottom-0"
      style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
      <p class="mb-0 fw-bold"><i class="fa-regular fa-comment"></i> Notas</p>
    </div>
    <div class="notes-content"></div>

    <input type="hidden" name="note_cust_id" value="<? echo $sub_array[0];?>">
    <input type="hidden" name="note_user_name" value="<? echo $_SESSION['username'];?>">

    <div class="input-group">
        <textarea class="form-control small margin-field-chat" name="note_message" rows="2" placeholder="Mensaje" required></textarea> 
    </div>
  </form>
</div>