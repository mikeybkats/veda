require "middleman-core"

Middleman::Extensions.register :copy_cms do
  require "my-extension/extension"
  MyExtension
end
