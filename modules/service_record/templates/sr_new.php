<div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <form method="post">
                        <div class="form-group foptions">
                            <label class="control-label requiredField" for="sr_type">
                                Type of Service Record
                                <span class="asteriskField">*</span>
                            </label>
                            <select class="select form-control" id="sr_type" name="sr_type">
                                <option value="Incident">
                                    Incident
                                </option>
                                <option value="Repair">
                                    Repair
                                </option>
                                <option value="Other">
                                    Other
                                </option>
                            </select>
                            <span class="help-block" id="hint_sr_type">
                                Select type of service record
                            </span>
                        </div>
                        <div class="form-group ">
                            <label class="control-label requiredField" for="user">
                                User
                                <span class="asteriskField">
                                    *
                                </span>
                            </label>
                            <select class="select form-control" id="user" name="user">
                                <option value="Allen Perry">
                                    Allen Perry
                                </option>
                                <option value="Eugene Duffy">
                                    Eugene Duffy
                                </option>
                                <option value="Joshua Nasiatka">
                                    Joshua Nasiatka
                                </option>
                            </select>
                            <span class="help-block" id="hint_user">
                                Select User
                            </span>
                        </div>
                        <div class="form-group ">
                            <label class="control-label requiredField" for="building">
                                Building
                                <span class="asteriskField">
                                    *
                                </span>
                            </label>
                            <select class="select form-control" id="building" name="building">
                                <option value="Add New">
                                    --Select Building--
                                </option>
                            </select>
                            <span class="help-block" id="hint_building">
                                Select bulding from dropdown
                            </span>
                        </div>
                        <div class="form-group ">
                            <label class="control-label requiredField" for="machine">
                                Machine
                                <span class="asteriskField">
                                    *
                                </span>
                            </label>
                            <select class="select form-control" id="machine" name="machine">
                                <option value="Add New">
                                    Add New
                                </option>
                            </select>
                            <span class="help-block" id="hint_machine">
                                Select user machine or add new
                            </span>
                        </div>
                        <div class="form-group">
                            <div>
                                <button class="btn btn-success " name="submit" type="submit">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
