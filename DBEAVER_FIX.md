# Fix: "Public Key Retrieval is not allowed" in DBeaver (MySQL)

This error happens with MySQL 8 when DBeaver connects. Fix it by allowing public key retrieval.

## Steps in DBeaver

1. **Right-click** your connection **"clusters"** in the left panel → **Edit Connection** (or **Connection Settings**).
2. Open the **"Driver properties"** tab (or **"Edit Driver Settings"**).
3. Find or add the property:
   - **Property name:** `allowPublicKeyRetrieval`
   - **Value:** `true`
4. Click **OK** and try **Test Connection** again.

---

## Alternative: Add to connection URL

1. **Edit Connection** → **Main** tab.
2. If you see **URL** (or **Open connection settings** / **Driver properties**), add this at the end of the URL (before any existing `?` add `?`, then):
   ```
   allowPublicKeyRetrieval=true
   ```
   Example full URL:
   ```
   jdbc:mysql://localhost:3306/clusters?allowPublicKeyRetrieval=true
   ```
3. Save and test the connection.

---

## If you use "Driver properties" list

1. **Edit Connection** → **Driver properties** tab.
2. Click **Add property** or find the list of properties.
3. Add:
   - **Property:** `allowPublicKeyRetrieval`
   - **Value:** `true`
4. **OK** → **Test Connection**.

After this, the connection should work.
