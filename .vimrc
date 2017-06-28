nnoremap <leader>rc :!middleman build --no-clean<cr>
nnoremap <leader>rs :!rsync -rv build/. root@vedaenv.com:/var/www/html --exclude=couch<cr>


