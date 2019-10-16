status = :pending
puts status.class # hiển thị: Symbol
puts :pending.class # hiển thị: Symbol

puts status == 'pending' # hiển thị: false