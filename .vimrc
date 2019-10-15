nnoremap <leader>rc :!bundle exec middleman build --no-clean<cr>
nnoremap <leader>rl :!bundle exec middleman build --no-clean --build-dir=/Users/jon/Projects/veda-localdev/html<cr>
nnoremap <leader>rs :!rsync -rv build/. root@vedaenv.com:/var/www/html --exclude=couch<cr>
nnoremap <leader>rds :!rsync -rv /Users/jon/Projects/veda-localdev/html/. root@vedaenv.com:/var/www/dev --exclude=couch<cr>
nnoremap <leader>rdb :!bundle exec middleman build --no-clean --build-dir=/Users/jon/Projects/veda-localdev/html<cr>



