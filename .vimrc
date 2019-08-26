nnoremap <leader>rc :!bundle exec middleman build --no-clean<cr>
nnoremap <leader>rl :!bundle exec middleman build --no-clean --build-dir=/Users/jon/Projects/veda-localdev/html<cr>
nnoremap <leader>rs :!rsync -rv build/. root@vedaenv.com:/var/www/html --exclude=couch<cr>


