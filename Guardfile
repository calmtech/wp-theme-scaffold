guard :compass do
	watch(%r{sass/(.+\.s[ac]ss)})
end

guard 'coffeescript', :output => 'js' do
	watch(%r{coffee/(.+\.coffee)})
end

guard :concat, :type => "css", :files => %w(base), :input_dir => "css", :output => "style.css"
guard :concat, :type => "js", :files => %w(app), :input_dir => "js", :output => "js/all"

guard 'uglify', :destination_file => "js/all.min.js" do
  watch(%r{js/all.js})
end

guard 'livereload' do
  watch(%r{.+\.(css|js)})
  watch(%r{sass/.+\.s[ac]ss})
  watch(%r{.+\.html})
  watch(%r{.+\.php})
end