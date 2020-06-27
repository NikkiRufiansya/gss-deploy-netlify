<form>
  <div>
    <label for="party">Choose your preferred party date and time (required, June 1st 8.30am to June 30th 4.30pm):</label>
    <input id="party" type="datetime-local" name="partydate"
           min="2017-06-01T08:30" max="2017-06-30T16:30"
           pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}T[0-9]{2}:[0-9]{2}" required>
    <span class="validity"></span>
  </div>
  <div>
    <input type="submit" value="Book party!">
  </div>
  <input type="hidden" id="timezone" name="timezone" value="-08:00">
</form>