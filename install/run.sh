file="install/first_run.txt"
if [ -f "$file" ]
then
  # Move install files to the correct position
  
else
  echo "Skipping first_run."
fi