<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Member Details</h5>
                <div class="text-right" style="margin-left:40px">
                <a class="btn btn-success" onclick="printdiv('printable_div_body_id')" target="_blank">Download PDF</a>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="printable_div_body_id">
            </div>
        </div>
    </div>
</div>


<script>
      function printdiv(elem) {
         var header_str = '<html><head><title>' + document.title + '</title></head><body>';
         var footer_str = '</body></html>';
         var new_str = document.getElementById(elem).innerHTML;
         var old_str = document.body.innerHTML;
         document.body.innerHTML = header_str + new_str + footer_str;
         window.print();
         document.body.innerHTML = old_str;
         return false;
      }
   </script>