<div class="main-content">
    <?php echo $__env->make('includes.alert-result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-12">
            <div class="card mb-4 mx-4">
                <div class="card-header pb-0">
                    <div class="d-flex flex-row justify-content-between">
                        <div>
                            <h5 class="mb-0"><?php echo e(__('Audits List')); ?></h5>
                        </div>
                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-gradient-success btn-block mb-3" data-bs-toggle="modal" data-bs-target="#NewAudit">
                            <?php echo e(__('New Audit')); ?>

                            </button>
                            <!-- Modal -->
                            <div wire:ignore.self class="modal fade" id="NewAudit" tabindex="-1" role="dialog" aria-labelledby="NewAudit" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel"><?php echo e(__('Create Audit')); ?></h5>
                                            <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <form>
                                            <div class="modal-body">
                                                <?php echo csrf_field(); ?>
                                                <div class="form-group row<?php echo e($errors->has('frequency') ? ' has-error' : ''); ?>">
                                                    <label for="frequency"  class="col-md-4 control-label"><?php echo e(__('Frequency')); ?></label>
                                                
                                                    <div class="col-md-6">
                                                        <select class="form-control <?php $__errorArgs = ['frequency'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  name="frequency" id="frequency"  wire:model="frequency">
                                                            <option value=""><?php echo e(__('Select frequency')); ?></option>
                                                            <option value="Annually"><?php echo e(__('Annually')); ?></option>
                                                            <option value="Bi-annually"><?php echo e(__('Bi-annually')); ?></option>
                                                            <option value="Quarterly"><?php echo e(__('Quarterly')); ?></option>
                                                            <option value="Monthly"><?php echo e(__('Monthly')); ?></option>
                                                            <option value="Bi-monthly"><?php echo e(__('Bi-monthly')); ?></option>
                                                            <option value="Weekly"><?php echo e(__('Weekly')); ?></option>
                                                            <option value="Daily"><?php echo e(__('Daily')); ?></option>
                                                        </select>
                                                        <?php $__errorArgs = ['frequency'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row<?php echo e($errors->has('scope') ? ' has-error' : ''); ?>">
                                                    <label for="scope" class="col-md-4 control-label"><?php echo e(__('Scope')); ?></label>

                                                    <div class="col-md-6">
                                                        <input id="scope" type="text" class="form-control" name="scope" wire:model="scope" required>
                                                        <?php $__errorArgs = ['scope'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row<?php echo e($errors->has('duration') ? ' has-error' : ''); ?>">
                                                    <label for="duration"  class="col-md-4 control-label"><?php echo e(__('Duration')); ?></label>
                                                
                                                    <div class="col-md-6">
                                                        <select class="form-control <?php $__errorArgs = ['duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"  name="duration" id="duration"  wire:model="duration">
                                                            <option value=""><?php echo e(__('Select duration')); ?></option>
                                                            <option value="1 day">1 <?php echo e(__('Day')); ?></option>
                                                            <option value="2 days">2 <?php echo e(__('Days')); ?></option>
                                                            <option value="3 days">3 <?php echo e(__('Days')); ?></option>
                                                            <option value="4 days">4 <?php echo e(__('Days')); ?></option>
                                                            <option value="5 days">5 <?php echo e(__('Days')); ?></option>
                                                            <option value="6 days">6 <?php echo e(__('Days')); ?></option>
                                                            <option value="1 week">1 <?php echo e(__('Week')); ?></option>
                                                            <option value="2 weeks">2 <?php echo e(__('Weeks')); ?></option>
                                                            <option value="3 weeks">3 <?php echo e(__('Weeks')); ?></option>
                                                            <option value="1 month">1 <?php echo e(__('Month')); ?></option>
                                                            <option value="2 months">2 <?php echo e(__('Months')); ?></option>
                                                            <option value="3 months">3 <?php echo e(__('Months')); ?></option>
                                                            <option value="6 months">6 <?php echo e(__('Months')); ?></option>
                                                            <option value="1 year">1 <?php echo e(__('Year')); ?></option>
                                                            <option value="2 years">2 <?php echo e(__('Years')); ?></option>
                                                            <option value="3 years">3 <?php echo e(__('Years')); ?></option>
                                                        </select>
                                                        <?php $__errorArgs = ['duration'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="form-group row<?php echo e($errors->has('objectives') ? ' has-error' : ''); ?>">
                                                    <label for="objectives"  class="col-md-4 control-label"><?php echo e(__('Objectives')); ?></label>

                                                    <div class="col-md-6">
                                                        <input id="objectives" type="text" class="form-control<?php echo e($errors->has('objectives') ? ' is-invalid' : ''); ?>" name="objectives" wire:model="objectives" required autofocus>
                                                        <?php $__errorArgs = ['objectives'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row<?php echo e($errors->has('resources') ? ' has-error' : ''); ?>">
                                                    <label for="resources"  class="col-md-4 control-label"><?php echo e(__('Resources')); ?></label>
                                                
                                                    <div class="col-md-6">
                                                        <input id="resources" type="text" class="form-control<?php echo e($errors->has('resources') ? ' is-invalid' : ''); ?>" name="resources" wire:model="resources" required>
                                                        <?php $__errorArgs = ['resources'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?><br/></span><?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                                                <button type="button" wire:click.prevent="storeAudit()" class="btn bg-gradient-primary"><?php echo e(__('Submit')); ?></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th ></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Frequency')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Scope')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Duration')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Objectives')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Resources')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Creation Date')); ?></th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"><?php echo e(__('Actions')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $AuditSchedules; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AuditSchedule): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>#<?php echo e($AuditSchedule->id); ?></td>
                                        <td><?php echo e($AuditSchedule->frequency); ?></td>
                                        <td><?php echo e($AuditSchedule->scope); ?></td>
                                        <td><?php echo e($AuditSchedule->duration); ?></td>
                                        <td><?php echo e($AuditSchedule->objectives); ?></td>
                                        <td><?php echo e($AuditSchedule->resources); ?></td>
                                        <td><?php echo e($AuditSchedule->GetPrettyCreatedAttribute()); ?></td>
                                        <td>
                                            <!-- View Link -->
                                            <a href="<?php echo e(route('audit-management-show', $AuditSchedule)); ?>" class="btn bg-gradient-primary btn-block mb-3"><?php echo e(__('View')); ?></a>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <?php echo e($AuditSchedules->links()); ?>

                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH /var/www/html/klaus/mvp-green/resources/views/livewire/audit-management.blade.php ENDPATH**/ ?>