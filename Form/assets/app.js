
document.addEventListener('DOMContentLoaded',()=>{
  document.querySelectorAll('form').forEach(form=>{
    form.addEventListener('submit',()=>{
      const btn=form.querySelector('button[type="submit"]');
      if(btn){btn.dataset.old=btn.textContent;btn.textContent='Processing…';btn.disabled=true;}
    });
  });
  document.querySelectorAll('[data-toggle-password]').forEach(btn=>{
    btn.addEventListener('click',()=>{
      const input=document.getElementById(btn.dataset.togglePassword);
      if(input){input.type=input.type==='password'?'text':'password';btn.textContent=input.type==='password'?'Show':'Hide';}
    });
  });
  document.querySelectorAll('[data-confirm]').forEach(btn=>{
    btn.addEventListener('click',e=>{if(!confirm(btn.dataset.confirm)){e.preventDefault();}});
  });
});
